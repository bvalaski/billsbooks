# BillsBooks

A learning exercise for the Laravel framework and the development of a web front end
for tracking the books I've read and owned

Created by Bill Valaski (bill.valaski@gmail.com)

## Deployment steps

- Install a LAMP or XAMPP stack so basic services and tools for web hosting are present
- Install mySQL or MariadDB for the database service.
- Create an initial database without any tables
- Modify the `.ENV` file in the application root and update all variables starting with `DB_`

## Create tables using the Migrate feature

- Change to the directory holding the bills_books web code
`php artisan migrate:reset` Ignore any error displayed the first time executed
`php artisan migrate`

## Load base default table records

`php artisan db:seed --class=AuthorsSeeder`
`php artisan db:seed --class=GenresSeeder`
`php artisan db:seed --class=SeriesSeeder`
`php artisan db:seed --class=OwnedSeeder`

## Load sample book, author, and series records

`php artisan db:seed --class=AuthorsSampleSeeder`
`php artisan db:seed --class=SeriesSampleSeeder`
`php artisan db:seed --class=BooksSampleSeeder`

## The app uses

- Bootstrap 5 for CSS
- Laravel fo r the web framework
- Livewire for additional functionality
- mySQL for database
- OpenLibrary (<https://openlibrary.org/>) for access to the "free" book covers.

## History

### 2022-01 to 2022-03 - Initial Books controller and views

- Original books read were recorded using the Han dBase application with mobile
and Windows applications.
- Transfer records to mySQL and create relational tables
- CRUD access to books table

### 2022-06 to 2022-03 - Authors controller using Livewire

- Use Livewire to add interactive update of book list after selecting and author
- Build out CRUD features for updating authors and their associated books

### 2023-04 - Genres / Series / Owned Status controllers

- Built using Livewire and modal dialog features
- CRUD features for the addition and modification of book

-- Genres (ie Mystery, Fiction, etc)
-- Series (ie Star Wars, Jack Reacher, etc)
-- Owned Status (Paperback, Hardback, Kindle, etc.)

### 2023-05 - Migration and Seeder file updates

- Table adjustments for import of personal record data from mySQL.
- Documentation of table creation (migrate) and record import (seed)

### 2023-05 to 2023-08 - Authors controller updates

- Addition of Series and Read Date to book list display.
- Add pagination to book display.
- Add Search feature to Authors list
- Add logic to link co-authors to the book record.  Co-author book count will be fixed with future table updates.
- Add logic to create Author record 1 (Missing Author) if initial table seeder is not executed.
- Cleaned up Books table layout.

### 2023-09 to 2024-01 - Code cleanup, minor bug fixes
- Save the URL for filtered displays og genre, series, owned so that after show/edit the filterdd display can be re-shown.
- Updated the Genres view so the first genre can be edited but not deleted.
- Misc fixes to add spinners for dates and rating, validation additions, and confirmation before deleting a record.

