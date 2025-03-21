<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
  </a>
</p>

<p align="center">
  <a href="https://travis-ci.org/laravel/framework">
    <img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

<h1>Laravel To-Do Application</h1>

<p>A simple To-Do application built using Laravel.</p>

<h2>Features</h2>
<ul>
  <li>User authentication</li>
  <li>Create, read, update, and delete tasks</li>
  <li>Task categorization</li>
  <li>Due dates and priorities</li>
  <li>Responsive design</li>
</ul>

<h2>Requirements</h2>
<ul>
  <li>PHP >= 7.4</li>
  <li>Composer</li>
  <li>MySQL or SQLite</li>
  <li>Node.js and npm</li>
</ul>

<h2>Installation</h2>
<ol>
  <li>
    <strong>Clone the repository</strong>:
    <pre><code>git clone https://github.com/Rish-02/laravel-todo.git
cd laravel-todo</code></pre>
  </li>
  <li>
    <strong>Install dependencies</strong>:
    <pre><code>composer install
npm install</code></pre>
  </li>
  <li>
    <strong>Set up environment variables</strong>:
    <pre><code>cp .env.example .env</code></pre>
    <p>Configure the <code>.env</code> file with your database credentials and other settings.</p>
  </li>
  <li>
    <strong>Generate application key</strong>:
    <pre><code>php artisan key:generate</code></pre>
  </li>
  <li>
    <strong>Run migrations</strong>:
    <pre><code>php artisan migrate</code></pre>
  </li>
  <li>
    <strong>Build assets</strong>:
    <pre><code>npm run dev</code></pre>
  </li>
  <li>
    <strong>Start the development server</strong>:
    <pre><code>php artisan serve</code></pre>
  </li>
</ol>

<p>For more details, refer to the <a href="https://github.com/Rish-02/laravel-todo/blob/main/README.md">full README</a>.</p>
