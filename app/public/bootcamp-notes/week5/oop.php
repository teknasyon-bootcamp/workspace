<?php

echo "asdasdasdasdasda";

namespace Eray {

  function yazdir($metin) {
      echo $metin;
  }

  const DURUM = 1;

  class ORM {
    public function __construct()
    {
      echo "GlobalSinif çağrılıyor....";
      new \GlobalSinif();
      echo __NAMESPACE__."'ın ORM'si çalışıyor!";
    }

    public function deneme() {
      echo "deneme!";
    }
  }
}

namespace Eray\Database {
  class ORM {
    public function __construct()
    {
      echo __NAMESPACE__."'ın ORM'si çalışıyor!";
    }
  }
}

namespace Haydar {
  function yazdir($metin) {
    echo "daha afilli yazı: {$metin}";    
  }
  class ORM {
    public function __construct()
    {
      echo __NAMESPACE__."'ın ORM'si çalışıyor!";
    }
  }
}

