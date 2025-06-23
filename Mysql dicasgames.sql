create database dbgames;
use dbgames;
create table tbdicasgames(
idgames int primary key auto_increment,
nome_game varchar(100),
ano_public varchar(10),
game_dev varchar(60),
game_copis varchar(1000000),
game_criador varchar(98),
game_parecid varchar(160),
game_genero varchar(50),
game_desc varchar(200)
);
show tables;
describe tbdicasgames;