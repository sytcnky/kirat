<?php

class App
{
    private string $lang;
    private array $langData;
    private string $pageFile;
    private string $pageTitle;
    private array $segments;
    private string $slug = '';

    public function __construct()
    {
        $this->initHelpers();
        $this->initLang();
        $this->parseUrl();
        $this->route();
    }

    private function initHelpers(): void
    {
        require_once __DIR__ . '/../config/helpers.php';
    }

    private function initLang(): void
    {
        $this->lang = $_GET['lang'] ?? 'tr';
        if (!in_array($this->lang, ['tr', 'en'])) {
            $this->lang = 'tr';
        }
        $langFile = __DIR__ . '/../data/lang/' . $this->lang . '.json';
        $this->langData = json_decode(file_get_contents($langFile), true);
    }

    private function parseUrl(): void
    {
        $url = isset($_SERVER['REQUEST_URI']) ? trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') : '';
        $this->segments = explode('/', $url);
    }

    private function route(): void
    {
        define('APP_PATH', __DIR__ . '/../app/pages/');

        $routes = [
            '' => ['file' => 'home.php', 'title' => $this->langData['site']['title']],
            'hakkimizda' => ['file' => 'hakkimizda.php', 'title' => $this->langData['menu']['about']],
            'faaliyet-alanlari' => ['file' => 'faaliyet-alanlari.php', 'title' => $this->langData['menu']['services']],
            'ekip' => ['file' => 'ekip.php', 'title' => $this->langData['menu']['team']],
            'blog' => ['file' => 'blog.php', 'title' => $this->langData['menu']['blog']],
            'iletisim' => ['file' => 'iletisim.php', 'title' => $this->langData['menu']['contact']],
            'kariyer' => ['file' => 'kariyer.php', 'title' => $this->langData['menu']['career']],
            'sss' => ['file' => 'sss.php', 'title' => $this->langData['faq']['title']],

        ];

        // Blog detay
        if ($this->segments[0] === 'blog' && isset($this->segments[1])) {
            $this->slug = preg_replace('/[^a-zA-Z0-9\-]/', '', $this->segments[1]);
            $this->pageFile = APP_PATH . 'blog-detay.php';
            $this->pageTitle = $this->langData['menu']['blog'];
        }
        elseif (array_key_exists($this->segments[0], $routes)) {
            $route = $routes[$this->segments[0]];
            $this->pageFile = APP_PATH . $route['file'];
            $this->pageTitle = $route['title'];
        }
        else {
            $this->pageFile = APP_PATH . '404.php';
            $this->pageTitle = '404';
        }
    }

    public function render(): void
    {
        $langData = $this->langData;
        $lang = $this->lang;
        $pageTitle = $this->pageTitle;
        $slug = $this->slug;

        include __DIR__ . '/../templates/header.php';
        include $this->pageFile;
        include __DIR__ . '/../templates/footer.php';
    }
}
