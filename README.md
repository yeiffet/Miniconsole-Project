# Mini Console Project
Skeleton project made for fast dev console utils! 

## How to Run the project
This project run under docker environment, so you need docker installed and a computer with Linux based SO
For start the project you only run two make commands:

    make install
And you can test the default command with:

    make run
It's simple!

For the input/output of the program there is a directory that you can edit with you needs. The directory is the root:

> *data*


If you want to run the test, it's simple too! run this:

    make test

## About the project
A Symfony 5 project with basic vendors to run simple console commands that you need. It's use the Hexagonal Architecture for the structure that you can make your uses cases easily.
The project have an integrated feature that you don't need to worry about the infrastructure. You directly can write your command wherever you want (I recommend putting in UI/Console directory for consistence), and it is injected automatically and ready to use by the console.

## Author
Code made by: Jafet Juan López Rodríguez

Email: lopezrodriguezjj@gmail.com