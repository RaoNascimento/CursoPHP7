
create schema bdPHP7;
/*drop schema bdPHP7;*/
use bdPHP7;
create table tb_usuarios( 
idusuario int not null auto_increment primary key,
deslogin varchar(64) not null,
dessenha varchar (256) not null,
dtcadastro timestamp not null default current_timestamp()
); 

insert into tb_usuarios(deslogin, dessenha) values ("Pedro", "123");
insert into tb_usuarios(deslogin, dessenha) values ("PP", "456");

select*from tb_usuarios;


