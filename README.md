# PHP Laravel Livewire Data Table

<img src="resources\images\laravel-data-table.png" alt="Livewire data tables example">

# Contribution Guidelines

## Overview

Thank you for considering contributing to this project! Your contributions help make this project better. Here's a brief overview of the component you can contribute to:

### Component: User List with Filters

The provided code is a user list component with filtering options. Users can be searched, sorted, and paginated based on different criteria. Your contribution can enhance the functionality, improve the UI, or fix any existing issues.

## Contribution Steps

To contribute, follow these steps:

1. **Fork the Repository**

    Fork the repository to your GitHub account.

2. **Clone the Repository**

    Clone the forked repository to your local machine:

    ```bash
    git clone https://github.com/your-username/your-forked-repo.git
    ```

3. **Project setup**

    Run the following commands to set up the project, make database tables and populate them.

    ```bash
    composer update
    php artisan key:generate
    ```

    At this point make a table in your server and edit the /env.example file to .env and then run the commands below:

    ```bash
    php artisan migrate --seed
    php artisan serve
    ```

    The last command will open a webpage in your browser at <http://127.0.0.1:8000/>

4. **Make Changes**

    Make your desired changes to the code. You can add features, fix bugs, or improve the existing code.

5. **Commit Changes**

    Commit your changes with a clear and descriptive commit message:

    ```bash
    git add .
    git commit -m "your descriptive commit message here"
    ```

6. **Push Changes**

    Push your changes to your GitHub repository:

    ```bash
    git push origin master
    ```

7. **Create Pull Request**

    Create a pull request from your forked repository to the original repository. Provide a **clear title** and **description** for your pull request.

## Code Structure

The code is structured as follows:

-   **User List Component**: The main component is a user list with filtering options.
-   **Search Input**: Allows users to search for specific users based on a given query.
-   **Sorting Options**: Users can sort the list based on ID, Name, Email, or Sign-up date.
-   **Pagination**: The user list is paginated for better user experience.

## Testing

Before submitting your pull request, ensure that your changes are well-tested and do not introduce any regressions.

## Contributors

-   <a href="https://github.com/octocatblain">Blain Muema</a>

## Help and Support

If you have any questions or need assistance, feel free to open an issue or reach out to this community.

Thank you for contributing!

Happy coding!
