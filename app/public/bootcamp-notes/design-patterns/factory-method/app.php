<?php

interface SocialNetwork
{
    public function loginApi();
    public function createPost(string $content): bool;
    public function forgetToken();
}

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): SocialNetwork;
    abstract public function handleError(): void;

    public function post(string $content): void
    {
        $network = $this->getSocialNetwork();
        $network->loginApi();
        if (!$network->createPost($content)) {
            $this->handleError();
        }
        $network->forgetToken();
    }
}

class Facebook implements SocialNetwork
{
    public function __construct(protected string $token) { }

    public function loginApi()
    {
        echo "{$this->token} kullanılarak facebook api'ye giriş yapılıyor...";
    }

    public function createPost(string $content): bool
    {
        echo "{$this->token} kullanılarak facebook api'ye {$content} gönderiliyor...";
        return true;
    }

    public function forgetToken()
    {
        echo "{$this->token} facebook api çıkış yapılıyor...";
    }
}

class FacebookPoster extends SocialNetworkPoster
{
    public function __construct(protected string $token) { }

    public function getSocialNetwork(): SocialNetwork
    {
        return new Facebook($this->token);
    }

    public function handleError(): void
    {
        echo "Facebook için hata oluştu! Facebook'a özel hata çözümü uygulanıyor...";
    }
}

class LinkedIn implements SocialNetwork
{
    public function __construct(protected string $username, protected string $password) { }

    public function loginApi()
    {
        echo "{$this->username} {$this->password} kullanılarak linkedin api'ye giriş yapılıyor...";
    }

    public function createPost(string $content): bool
    {
        echo "{$this->username} kullanılarak linkedin api'ye {$content} gönderiliyor...";
        return false;
    }

    public function forgetToken()
    {
        echo "{$this->username} linkedin api çıkış yapılıyor...";
    }
}

class LinkedInPoster extends SocialNetworkPoster
{
    public function __construct(protected string $username, protected string $password) { }

    public function getSocialNetwork(): SocialNetwork
    {
        return new LinkedIn($this->username, $this->password);
    }

    public function handleError(): void
    {
        echo "LinkedIn için hata yönetimi uygulanıyor...";
    }
}

function postToSocialNetwork(SocialNetworkPoster $poster)
{
    $poster->post("Merhaba!");
}

postToSocialNetwork(new FacebookPoster("token123"));
postToSocialNetwork(new LinkedInPoster("linkedinuser", "linkedinpassword"));

