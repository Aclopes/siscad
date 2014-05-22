$sql = "create table curso(\n"
    . "	id_curso INT(10) AUTO_INCREMENT PRIMARY KEY,\n"
    . " nome varchar(100) not null,\n"
    . " duracao varchar(100),\n"
    . " coordenador varchar(11),\n"
    . " nivel varchar(25),\n"
    . " complemento varchar(50),\n"
    . " FOREIGN KEY (coordenador) references professor(cpf)\n"
    . ")";
