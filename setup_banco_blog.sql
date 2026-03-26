.open banco_blog.db
.mode column

drop table blog;
create table blog(
    id integer not null primary key,
    nome text,
    autor text,
    email_adm text
);

insert into blog(nome, autor, email_adm)
values('Blog do Grêmio','Douglas Daniel', 'douglas@gmail.com');


drop table posts;
create table posts(
    postId integer not null primary key,
    titulo text,
    texto text,
    data text,
    autor,
    img text
);

insert into posts (titulo, texto, autor, data, img)
values('Campeão Gaúcho',
        'Grêmio empata com Internacional no Beira-Rio mas se consagra campeão pelo placar agregado',
        'Douglas',
        '16/03/26',
        '/img/icones/taça.svg');

insert into posts (titulo, texto, autor, data, img)
values('Grêmio x Bragantino',
        'Grêmio empata com Bragantino pelo brasileirão por 1x1', 
        'Douglas',
        '09/02/26',
        '/img/icones/chat.svg');

drop table trofeus;
create table trofeus(
    trofeuId integer not null primary key,
    nome text,
    quantidade integer,
    ultimo integer,
    img text
);

insert into trofeus (nome, quantidade, ultimo, img)
values('Libertadores', 3, 2017, 'sla');


drop table jogadores;
create table jogadores(
    jogadorId integer not null primary key,
    nome text,
    posicao text,
    idade integer,
    camisa integer,
    nacionalidade text,
    img text
);


drop table contratacoes;
create table contratacoes(
    contratacaoId integer not null primary key,
    nome text,
    posicao text,
    time text,
    idade integer,
    nacionalidade text,
    valor integer,
    img text
);

drop table partidas;
create table partidas(
    partidasId integer not null primary key,
    ultimas text,
    proximas text,
    data text,
    hora text
);