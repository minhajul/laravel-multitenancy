## Laravel Multitenancy

This is a sample Laravel application demonstrating multitenancy functionality. It supports multiple tenants with separate subdomains and provides seeded data for each tenant.

### Features
 - Database Migration and Seeding: Migrate the database schema and seed initial data for tenants.
 - Default Domain: The default domain http://laravel-multitenancy.test/ shows JSON data of 1 user.
 - Tenant Subdomain: After seeding, a foo tenant is created, and browsing http://foo.laravel-multitenancy.test/ displays JSON data of 10 users.

### Testing the Application

#### Default Domain
Open your browser and navigate to http://laravel-multitenancy.test/. You should see a JSON response showing data for 1 user:
```
{
    "id": 1,
    "name": "Default User",
    "email": "default@example.com"
}
```
#### Tenant Subdomain
After seeding, the foo tenant is created. Navigate to http://foo.laravel-multitenancy.test/ in your browser. You should see a JSON response showing data for 10 users:
```
[
    {
        "id": 1,
        "name": "Foo User 1",
        "email": "foo1@example.com"
    },
    {
        "id": 2,
        "name": "Foo User 2",
        "email": "foo2@example.com"
    },
    ...
    {
        "id": 10,
        "name": "Foo User 10",
        "email": "foo10@example.com"
    }
]
```

### Prerequisites
 - PHP 8.2+
 - Composer
 - MySQL or any other database supported by Laravel
 - Laravel 11.0+
 - Web server (Apache, Nginx, etc.)

### License
This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
