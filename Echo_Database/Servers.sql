drop database Echo;

create database Echo;

use Echo;
create table credentials(
						user_id int PRIMARY KEY, 
						user_name varchar(40) unique, 
                        password varchar(100)
                        );
create table userProfile(
						user_id int PRIMARY KEY, 
                        Name varchar(50), 
                        phone_num bigint, 
                        email varchar(60), 
                        userAddress varchar(500), 
                        B_S int check(B_S between 0 and 1),
                        foreign key(user_id) references credentials(user_id)
                        on delete cascade
                        );
create table productTable(
						prod_id int,
                        user_id int,
                        product_name varchar(50),
                        price_per_kg int,
                        quantity int,
                        primary key(prod_id, user_id),
                        foreign key(user_id) references userProfile(user_id)
                        on delete cascade
                        );
create table bidding(
					auction_id int primary key,
					prod_id int,
                    user_id int,
                    auction_amount int,
                    foreign key(prod_id) references productTable(prod_id)
                    on delete cascade,
                    foreign key(user_id) references userProfile(user_id)
                    on delete cascade
					);
create table contactUs(
					contact_no int primary key,
                    user_id int,
                    email varchar(60),
                    name varchar(40),
                    foreign key(user_id) references userProfile(user_id)
                    on delete cascade
					);                    
create table reportUser(
						report_no int primary key,
						reporter_id int,
                        reported_id int,
                        reportRemarks varchar(400),
                        foreign key(reporter_id) references userProfile(user_id)
                        on delete cascade,
                        foreign key(reported_id) references userProfile(user_id)
                        on delete cascade
                        );

select * from credentials;
select * from userProfile;
select * from productTable;
select * from reportUser;
select * from contactUs;
select * from bidding;

select prod_id, max(auction_amount) from bidding group by prod_id;

select Name from userProfile as a, productTable as b where a.user_id = b.user_id and b.prod_id = 379;

SELECT b1.prod_id, b1.user_id, auction_amount
FROM bidding b1
INNER JOIN (
    SELECT prod_id, MAX(auction_amount) AS max_amount
    FROM bidding
    GROUP BY prod_id
) b2 ON b1.prod_id = b2.prod_id AND b1.auction_amount = b2.max_amount;
