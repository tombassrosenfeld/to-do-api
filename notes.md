# Database Structure

##Board

-Title VARCHAR(100)
-Description VARCHAR(100)

many to one - list, card


##List

-Title VARCHAR(100)

many to one - card


##Card

-Title VARCHAR(100)
-Description text

many to one - comment?, deadline?, steps?