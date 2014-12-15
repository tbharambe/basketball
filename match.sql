create table matches( id int auto_increment,
			code varchar(50) not null,
			name varchar(250) not null,
			gameDate date not null,
			gameTime time not null,
			venue varchar(250) not null,
			tourney varchar(50),
			images varchar(250),
			primary key match_id(id),
			unique key match_code ( code, gameDate, gameTime)
			);
			
create table matchDetails( match_id int ,
			winner varchar(25),
			loser varchar(25),
			bestplayer varchar(50),
			WinnerScore int,
			loserScore int
			);
			
			

create table matchInfo( id int auto_increment,
		code varchar(50) not null,
		name varchar(250) not null,
		gameDate date not null,
		gameTime time not null,
		venue varchar(250) not null,
		tourney varchar(50),
		images varchar(250),
		teamA varchar(30),
		teamB varchar(30),
		teamAScore int,
		teamBScore int,
		bestplayer varchar(50),
		primary key match_id(id),
		unique key match_code ( code, gameDate, gameTime)
		);
