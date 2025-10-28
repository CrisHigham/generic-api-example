# Generic Api Example
An example api used to explain and test generic-api. 

At your own risk, you can use this as a base for a generic-api project. Instructions here are only to establish the test platform. If using this as a base for an api project it is expected that you understand what adjustments to make. Generic Api documentation is in that package.

### Test Class

There is a single TestUser class which when used with the provided Postman collection acts as a full test for Generic Api.

## Installation

`composer require justblink/generic-api-example` This will also install the database and all dependancies.

Initialize Tina 4

`composer exec tina4 initialize:run`

There is no need to run migrations or do any other setup.

## Setup

Create a .env file. The contents of sample.env can be used out the box to run the test platform. It is created like this to ensure that the .env file is never committed to the repository, especially important if using this as a base project.

## Security

Using a standard Bearer token as written in the .env file will supply access to all endpoints through the AuthHelper class.

## Testing

Testing is now a Bruno collection kept in this repository. It will work out the box if using the sample.env settings. One needs to add the token to the Bruno environment. Running the collection goes through a set of requests designed to test generic-api and any failure should be cause for alarm.

Presuming there are no errors the collection is self cleaning and will leave no data in the database. Should an error occur there will most likely be data to clean up before the next collection run. This is intentional to allow inspection of the database on error. There is no automatic database cleanup route.

## Generic Api Functionality

Generic Api functionality is documented in that package and is outside the scope of this software.
