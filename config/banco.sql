create database aula2git;

use aula2git;

create table tbcliente(
    id integer auto_increment primary key,
    nome varchar(50) not null,
    email varchar(50) not null
);

desc tbcliente;

insert into tbcliente values(null, 'Jose', 'jose@gmail.com');
insert into tbcliente values(null, 'Ana', 'ana@gmail.com');
insert into tbcliente values(null, 'Leo', 'leo@gmail.com');
insert into tbcliente values(null, 'Cris', 'cris@gmail.com');
insert into tbcliente values(null, 'Andre', 'andre@gmail.com');

select * from tbcliente;