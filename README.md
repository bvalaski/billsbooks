# BillsBooks

A learning exercise for the Laravel framework and the development of a web front end
for tracking the books I've read and owned

Created by Bill Valaski (bill.valaski@gmail.com)

## The app uses

- Bootstrap 5 for CSS
- Laravel fo r the web framework
- Livewire for additional functionality
- mySQL for database
- OpenLibrary (<https://openlibrary.org/>) for access to the "free" book covers

## History

### 2022-01 to 2022_03 - Initial Books controller and views

- Original books read were recorded using the Han dBase application with mobile
and Windows applications.
- Transfer records to mySQL and create relational tables
- CRUD access to books table

### 2022_06 to 2022-03 - Authors controller using Livewire

- Use Livewire to add interactive update of book list after selecting and author
- Build out CRUD features for updating authors and their associated books

### 2023_04 - Genres / Series / Owned Status controllers

- Built using Livewire and modal dialog features
- CRUD features for the addition and modification of book

-- Genres (ie Mystery, Fiction, etc)
-- Series (ie Star Wars, Jack Reacher, etc)
-- Owned Status (Paperback, Hardback, Kindle, etc.)
