$sql = "create table matricula(\n"
    . "	id_matricula int(10) AUTO_INCREMENT NOT NULL primary key,\n"
    . " id_curso int(10),\n"
    . " id_aluno char(11),\n"
    . " foreign key (id_aluno) references aluno(cpf),\n"
    . " foreign key (id_curso) references curso(id_curso)\n"
    . ")";