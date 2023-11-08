CREATE SCHEMA `tarefas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE tarefas;
CREATE TABLE IF NOT EXISTS cadastro (
  codigo int(10) unsigned NOT NULL auto_increment,
  tarefa varchar(255),
  dataDoEvento varchar(150),
  PRIMARY KEY (codigo)
);

SELECT * FROM cadastro;