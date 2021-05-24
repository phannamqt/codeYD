
select HoTen as Y,  LTRIM(RTRIM(LastName)) +' '+  
    LTRIM(RTRIM(case when len(HoTen)  >= len(LastName) + len(FirstName)+ 2
 
                       then substring(HoTen, len(LastName) + 2, len(HoTen) - len(FirstName) - len(LastName) - 2)
 
                       else ''
 
                   end)) as HoLot,
 
      RTRIM(LTRIM(FirstName))as FirstName
 
from (select HoTen,
 
          (case when Patindex('% %',Reverse(HoTen)) = 0 then HoTen
 
                else Reverse(substring(Reverse(HoTen),0,Patindex('% %',Reverse(HoTen))) )
 
          end) as FirstName,
 
          substring(HoTen,0, patindex('% %',HoTen)) as LastName
 
      from DM_NV) as E

