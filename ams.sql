select a.id,a.user_id,c.username am,b.hunter hunter_id,d.username hunter_name from clients a 
        left outer join tmp.client202112 b on b.id=a.id 
        left outer join users c on c.id=a.user_id 
        left outer join users d on d.id=b.hunter ;

select a.id,a.user_id,c.username am,b.hunter hunter_id from clients a 
        left outer join tmp202112.client202112 b on b.id=a.id 
        left outer join users c on c.id=a.user_id group by a.id,a.user_id,c.username,b.hunter;
        left outer join users d on d.id=b.hunter ;