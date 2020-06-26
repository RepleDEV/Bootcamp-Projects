### Creating a database:

```sql
CREATE DATABASE myshop;

```

### Creating a table with a name `users`.

```sql
CREATE TABLE users 	(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(255),
	email varchar(255),
	password varchar(255)
);
```

### Creating a table named `categories`.

```sql
CREATE TABLE categories (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(255)
);
```

### Creating a table named `items`.

```sql
CREATE TABLE items (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(255),
	description varchar(255),
	price INT,
	stock INT,
	category_id INT NOT NULL,
	FOREIGN KEY (category_id) REFERENCES categories(id)
);
```

### Pushing data intu tables. Push name, email, and passwd into `users`

```sql
INSERT INTO users (name,email,password)
VALUES
	("John Doe","john@doe.com","john123"),
	("Jane Doe","jane@doe.com","jenita123");
```

