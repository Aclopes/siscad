$sql = "create table aluno (\n"
    . " cpf CHAR(11) primary key,\n"
    . " nome varchar(100) not null,\n"
    . " endereco varchar(100) not null,\n"
    . " complemento varchar(20) not null,\n"
    . " cep char(8) not null,\n"
    . " bairro varchar(25),\n"
    . " cidade varchar(50) not null,\n"
    . " estado char(2) not null,\n"
    . " telefone char(11)\n"
    . " )";