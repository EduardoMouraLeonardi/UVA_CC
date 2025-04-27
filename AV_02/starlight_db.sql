DROP DATABASE IF EXISTS starlight;
DROP TABLE IF EXISTS servicos;
DROP TABLE IF EXISTS novidades;

CREATE DATABASE starlight
    DEFAULT CHARACTER SET = 'utf8mb4';

USE starlight;
CREATE Table servicos(
    id_serv INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(75) NOT NULL,
    descricao TEXT NOT NULL,
    valor FLOAT NOT NULL

);

CREATE TABLE novidades(
    id_nov INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(75) NOT NULL,
    descricao TEXT NOT NULL
);

USE starlight;
INSERT into novidades (titulo, descricao) 
values ('Agora ofereceremos nosso serviços para todo o Brasil', 'Temos o prazer de anunciar que visando expandir nossos horizontes e trazer ainda mais facilidade para suas vidas agora ofereceremos nossos serviços para todo o Brasil. A partir do dia 01/06/2025, todos os nossos serviços estarão disponíveis para todo o território nacional. Isso significa que, independentemente de onde você esteja, poderá contar com a qualidade e eficiência que sempre oferecemos. Estamos ansiosos para atender você em qualquer lugar do Brasil!');
INSERT into novidades (titulo, descricao)
values ('Novos serviços disponíveis', 'Estamos animados em anunciar que adicionamos novos serviços à nossa lista! Agora você pode contar com uma variedade ainda maior de opções para atender às suas necessidades. Confira nosso site para mais detalhes e aproveite as novidades!');
INSERT into novidades (titulo, descricao)
values ('Promoção de Aniversario', 'Aproveite nossa promoção de Aniversario! Agora no mes de Julho, todos os nossos serviços estão com 20% de desconto para novos clientes. Não perca essa oportunidade de economizar e ainda desfrutar de nossos serviços de qualidade e excelência. Entre em contato conosco e aproveite!');

select * from novidades;

INSERT into servicos (nome, descricao, valor)
VALUES ('Suporte Técnico Remoto', 'Suporte técnico especializado para resolver problemas de software e hardware remotamente.', 150.00);
INSERT into servicos (nome, descricao, valor)
VALUES ('Suporte Técnico Local', 'Suporte técnico especializado para resolver problemas de software e hardware na sua localidade.', 200.00);
INSERT into servicos (nome, descricao, valor)
VALUES ('Suporte de Infra','Suporte técnico especializado para resolver problemas de infraestrutura de TI.', 350.00);
INSERT into servicos (nome, descricao, valor)
VALUES ('Desenvolvimento de Software', 'Desenvolvimento de software personalizado para atender às suas necessidades.', 3000.00);

INSERT into servicos (nome, descricao, valor)
VALUES ('Desenvolvimento de Sites', 'Desenvolvimento de sites personalizados para atender às suas necessidades.', 2000.00);
INSERT into servicos (nome, descricao, valor)
VALUES ('Atualização de Sistemas', 'Atualizamos sistemas antigos e depreciados e oferecemos ate 5 anos de suporte', 5000.00);

select * from servicos;