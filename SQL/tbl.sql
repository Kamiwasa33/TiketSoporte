
CREATE SCHEMA `tiketsoporte`;
use tiketsoporte;
/*drop table tbTiket;*/

create table tbTiket (
	id SERIAL PRIMARY KEY,
    Titulo varchar(100) not null,
    Nombre varchar(50) not null,
    Mensaje varchar(255) not null,
    Telefono BIGINT (15),
    Mail varchar(55) not null,
    Estatus varchar(20) not null);


insert into tbtiket (Titulo,Nombre,Mensaje,Telefono,Mail,Estatus) 
            values('Prueba uno','Asahel Valencia','Prueba de Mensaje','55235689030','h@h.com','NUEVO');
            
select * from tbTiket;

