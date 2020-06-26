## Pieces of code: 

### Creating a database:

```sql
CREATE DATABASE myshop;

```

### Actually using/selecting the database created.

```sql
USE myshop
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

### Pushing data into tables. Push name, email, and passwd into `users`.

```sql
INSERT INTO users (name,email,password)
VALUES
	("John Doe","john@doe.com","john123"),
	("Jane Doe","jane@doe.com","jenita123");
```

### Pushing data into the table `categories`.

```sql
INSERT INTO categories (name)
VALUES
	("gadget"),
	("cloth"),
	("men"),
	("women"),
	("branded");
```

### Pushing data into the table `items`.

```sql
INSERT INTO items (name,description,price,stock,category_id)
VALUES
	("Sumsang b50", "hape keren dari merek sumsang", 4000000, 100, 1),
	("Uniklooh", "baju keren dari brand ternama", 500000, 50, 2),
	("IMHO Watch", "jam tangan anak yang jujur banget", 2000000, 10, 1);
```

### Query on getting data from `users` excluding the `passwords` column.

```sql
SELECT id,name,email FROM users;
```

### Query on getting data from `items` that has a `price` of over 1,000,000 (1 Gigazigabillion lol).

```sql
SELECT * FROM items WHERE price > 1000000;
```

### Query on getting data from `items` that has a name `like` "[name]". (Idk how to describe this query lol).

```sql 
SELECT * FROM items WHERE name LIKE "uniklo%";
SELECT * FROM items WHERE name LIKE "%watch";
```

### Query on... screw the naming, here's the code

```sql
SELECT items.name, items.description, items.price, items.stock, items.category_id, categories.name FROM items, categories WHERE items.category_id = categories.id;
```

## Conclusion
Yea I hate databases. I should've been a game developer... SQL wasn't fun. >:(

I'm sorry that this is in English... to anyone willing to read this message ;)