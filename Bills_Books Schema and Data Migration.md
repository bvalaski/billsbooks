# Bills_Books Schema and Data Migration guide

The schema for the Bills_Books system is pretty basic - the primary table is "books" with associated tables for authors, series, genres, and ownership.  ID fields are present in "books" for links to related tables.

## Tables structure

### Books

| Field | Length| Attributes |
|  `id` | bigint(20) | UNSIGNED NOT NULL |
|  `title` | varchar(255) | NOT NULL|
|  `isbn` | varchar(255) | DEFAULT NULL |
|  `published` | int(11) | DEFAULT 1900 |
|  `date_read` | date | DEFAULT NULL |
|  `rating` | int(11) | DEFAULT 0 |
|  `genre_id` | bigint(20) | UNSIGNED NOT NULL DEFAULT 1 |
|  `author_id` | bigint(20) | UNSIGNED NOT NULL DEFAULT 1 |
|  `coauthor_id` | bigint(20) | UNSIGNED NOT NULL DEFAULT 1 |
|  `series_id` | bigint(20) | UNSIGNED NOT NULL DEFAULT 1 |
|  `owned_id` | bigint(20) | UNSIGNED NOT NULL DEFAULT 1 |
|  `comments` | varchar(255) | DEFAULT NULL |
|  `created_at` | timestamp | NULL DEFAULT NULL |
|  `updated_at` | timestamp | NULL DEFAULT NULL |

### Authors

| Field | Length| Attributes |
|  `id` | bigint(20) | UNSIGNED NOT NULL |
|  `lastname` | varchar(255) | NOT NULL |
|  `firstname` | varchar(255) | NOT NULL |
|  `created_at` | timestamp | NULL DEFAULT NULL |
|  `updated_at` | timestamp | NULL DEFAULT NULL |

### Genres

| Field | Length| Attributes |
|  `id` | bigint(20) | UNSIGNED NOT NULL |
|  `genre` | varchar(255) | NOT NULL |

### Series

| Field | Length| Attributes |
|  `id` | bigint(20) | UNSIGNED NOT NULL |
|  `series` | varchar(255) | NOT NULL |

### Owned

| Field | Length| Attributes |
|  `id` | bigint(20) | UNSIGNED NOT NULL |
|  `owned_status` | varchar(255) | NOT NULL |

-- Post seeder steps in mySQL:

UPDATE `books` SET `isbn`=null WHERE `isbn`="'null'"
UPDATE `books` SET comments=null WHERE comments="'null'"
UPDATE books SET comments=substr(comments,2,length(comments)-2) where comments IS NOT NULL

## Migration

The Laravel migration files included with this app build out the table structures shown above and
make the relationships between tables.  See the `README.md` document for instructions on creating the
tables to support the app.

## Seeders

There are 2 sets of seeders included with the app - the "base" seeders that create initial records for the Authors, Genres, Series, and Owned tables, and a second set of seeder files that contain sample data for the Books and Authors tables that can be used to test features of the application.  See the `README.md` document for instructions on running the seeder files to install the base and sample records.  Once you are done testing the application and ready to work with your own books, reset the migration and re-run the base seeders as noted in the readme file.
