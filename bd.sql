CREATE database teste_pratico;


CREATE TABLE IF NOT EXISTS "tipo" (
    "id" SERIAL PRIMARY KEY,
    "descricao" varchar(50) NOT NULL,
    "imposto1" float,
    "imposto2" float,
	"created_at" timestamp NOT NULL DEFAULT (NOW()),
	"updated_at" timestamp NOT NULL DEFAULT (NOW())
);

INSERT INTO tipo(descricao, imposto1, imposto2) VALUES ('iptu', 5, 10);
INSERT INTO tipo(descricao, imposto1, imposto2) VALUES ('ipva', 10, 3);

CREATE TABLE IF NOT EXISTS "produtos" (
    "id" SERIAL PRIMARY KEY,
    "descricao" varchar(50) NOT NULL,
    "tipo_id" int,
    "quantidade" int,
    "valor" float,
	"created_at" timestamp NOT NULL DEFAULT (NOW()),
	"updated_at" timestamp NOT NULL DEFAULT (NOW()),
	CONSTRAINT "fk_tipo_id" FOREIGN KEY ("tipo_id") REFERENCES "tipo" ("id")
);

INSERT INTO produtos(descricao, tipo_id, quantidade, valor) VALUES ('casa', 1, 1, 10000);