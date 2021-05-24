USE [QLBV_TT]
GO
/****** Object:  UserDefinedFunction [dbo].[fChuyenCoDauThanhKhongDau]    Script Date: 22/04/19 14:01:23 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create FUNCTION [dbo].[LayKiTuDauTu](@inputVar NVARCHAR(MAX) )
RETURNS NVARCHAR(MAX)
AS
BEGIN    
   --SET @inputVar = 'John Doe'
   SELECT @inputVar=left(PARSENAME(REPLACE(@inputVar, ' ', '.'), 2),1) +
       left(PARSENAME(REPLACE(@inputVar, ' ', '.'), 1),1) 
    RETURN @inputVar
END