
# VoteR
VoteR is a web-based app that allows users to create and participate in daily polls. Each day, users can create a new question, and other users can cast their votes by selecting from the existing options or adding new ones.

## Template Source

The template was originally created by <b>[rrd108](https://github.com/rrd108)</b>, you can check out their tutorials and content on their YouTube channel
<p dir="auto">
    <a href="https://www.youtube.com/@WebManiacc?sub_confirmation=1" title="Subscribe to their YouTube channel" rel="nofollow">
    <img src="https://camo.githubusercontent.com/513ba8a16470bbcf4b4c1da8d5cafdf24a7c6aae003192cec4a3fe6b139b621b/68747470733a2f2f637573746f6d2d69636f6e2d6261646765732e64656d6f6c61622e636f6d2f62616467652f2d5375627363726962652d7265643f7374796c653d666f722d7468652d6261646765266c6f676f3d766964656f266c6f676f436f6c6f723d7768697465" alt="YouTube" data-canonical-src="https://custom-icon-badges.demolab.com/badge/-Subscribe-red?style=for-the-badge&amp;logo=video&amp;logoColor=white" style="max-width: 100%;">
    </a>
</p>

Templates used for this application can be found at the following repository:
<p dir="auto">
    <a href="https://www.github.com/rrd108/youtube-modern-php" title="Open repository" rel="nofollow">
        <img src="https://custom-icon-badges.demolab.com/badge/-Repository-gray?style=for-the-badge&logoColor=white&logo=repo" alt="Repo" data-canonical-src="https://custom-icon-badges.demolab.com/badge/-Repository-gray?style=for-the-badge&logoColor=white&logo=repo" style="max-width: 100%;">
    </a>
</p>

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/10.x/installation#installation)

Clone the repository

    git clonegithub.com/zsombor1127/Laravel-VoteR.git

Switch to the repo folder

    cd Laravel-VoteR

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**Command list**

    git clone github.com/zsombor1127/Laravel-VoteR.git
    cd laravel-realworld-example-app
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan jwt:generate 
    

