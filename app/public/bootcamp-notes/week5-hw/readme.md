# Ödev 5: Genişletilebilirlik - Kitap Uygulaması

Bu haftaki grup ödevinizde, konfigürasyona bağlı olarak `MySQL` veya `MongoDB` desteği bulunan ayrıca yine
konfigürasyona bağlı olarak loglama işlemlerinin `veritabanı`, `dosya` veya `loglama kapalı` şeklinde değiştirilebildiği
bir web uygulaması yapmanız bekleniyor.

Depoda yer alan `config.php` dosyasına göre uygulama ilgili veritabanı sürücüsünü ve loglama yöntemini seçmelidir.

Örneğin, `config.php` dosyası içerisinde veritabanı sürücüsü olarak `mysql` seçildiyse uygulama içerisinde veritabanı ile
ilgili tüm işlemler `MySQL`'e göre çalışmalıdır. Aynı şekilde veritabanı sürücüsü olarak `mongodb` seçildiyse uygulama
içerisinde tüm veritabanı işlemleri `MongoDB`'e göre çalışmalıdır.

`config.php` dosyası içerisinde loglama yöntemi olarak `null` değeri verildiyse herhangi bir loglama işlemi yapılmamalı,
`file` seçildiyse sizin belirlediğiniz bir dosyaya log mesajları yazılmalı, `database` seçildiyse uygulama içerisinde
belirlenen veritabanı sürücüsünde sizin belirlediğiniz bir tabloya/koleksiyona log mesajları kaydedilmelidir.

![UML Example](https://raw.githubusercontent.com/teknasyon-bootcamp/homework5/master/uml.png)

Depoda örnek olması amacıyla bir UML dosyası eklenmiştir. İsteğe bağlı olarak farklı yapılar da oluşturabilirsiniz.
Sadece örnek UML'e bağlı kalmayıp ek yapılar oluşturmanız bekleniyor.

Yapılacak olan web uygulaması ile ilgili notlar aşağıda yer almaktadır.

---

Web uygulaması içerisinde **herhangi bir kullanıcı yetki yönetimi beklenmemekte.**

Web uygulamasında kitaplar (`books`) oluşturulmalı, bu kitaplar için kitap ismi yer almalıdır. Ziyaretçi web uygulaması
üzerinden bu kitapları isteğe bağlı olarak tekrar düzenleyebilmeli veya silebilmelidir.

Kitaplar içerisinde **isteğe bağlı olarak** bölümler (`sections`) oluşturulmalı, bu bölümler için herhangi bir
isim (`name`) belirtilebilmelidir.

Kitap içerisine yazılar (`posts`) eklenebilmeli, **isteğe bağlı olarak** kitaptaki herhangi tek bir bölüm ile
ilişkilendirilebilir olmalıdır. Bu yazılar içerisinde zengin metin alanı (`content`) ve yazar (`author`) yer almalıdır.

Kitaplarda olduğu gibi bölümler ve yazılar için de düzenleme ve silme işlemleri bulunmalıdır.

Kitapların listelendiği anasayfada kitaplarla birlikte yazarların da isimleri gösterilmelidir.

Son olarak kitaplar, bölümler ve yazılar JSON formatında dışa&içe aktarılabilir olmalıdır.

---

## Örnek Uygulama Testi

Aşağıdaki adresler örnek amaçlı verilmiştir. İsteğe göre farklı navigasyon/rota/adres kullanabilirsiniz.

- `index.php` - Kitap listesi ve her kitap için yazar isimleri yer alıyor mu?
- `index.php` - Listelenen kitaplar için düzenleme formuna gidecek veya silme işlemini yapacak bir buton/link yer alıyor
mu?
- `index.php` - Yeni kitap ekleme için bir buton/link yer alıyor mu?
- `book-create.php` - Yeni kitap ekleme formu gösteriliyor mu?
- `book-store.php` - Yeni kitap ekleme işlemi yapıldı mı?
- `book-edit.php?id=1` - Kitap düzenleme formu gösteriliyor mu?
- `book-update.php?id=1` - Kitap güncelleme işlemi yapıldı mı?
- `book-delete.php?id=1` - Kitap silindi mi?
- `book.php?id=1` - Kitaptaki tüm bölümler ve bu bölümlere ait yazılar listelendi mi? (eğer kitap içerisinde bölümler varsa...)
- `book.php?id=1` - Yeni bölüm ekleme için buton/link yer alıyor mu?
- `book.php?id=1` - Kitabın kendisine yazı ekleme için buton/link yer alıyor mu? (bir bölüme ait olmayan)
- `book.php?id=1` - Herbir bölüm içerisinde yazı ekleme için buton/link yer alıyor mu?
- `book.php?id=1` - Herbir bölüm için bölüm güncelleme ve silme butonları/linkleri yer alıyor mu?
- `book.php?id=1` - Herbir yazı için yazı güncelleme ve silme butonları/linkleri yer alıyor mu?
- `section-create.php?book=1` - Kitap için bölüm ekleme formu gösteriliyor mu?
- `section-store.php?book=1` - Kitaba ilgili bölüm eklendi mi?
- `section-edit.php?section=1` - Bölüm için güncelleme formu gösteriliyor mu?
- `section-update.php?section=1` - Bölüm için güncelleme yapıldı mı?
- `section-delete.php?section=1` - Bölüm silindi mi?
- `post-create.php?book=1` / `post-create.php?section=1` - Kitaba/bölüme yazı ekleme formu gösteriliyor mu?
- `post-store.php?book=1` - Kitaba/bölüme yazı ekleme işlemi yapıldı mı?
- `post-edit.php?post=1` - Yazı güncelleme formu gösteriliyor mu?
- `post-update.php?post=1` - Yazı güncellendi mi?
- `post-delete.php?post=1` - Yazı silme işlemi yapıldı mı?
- `export.php` - Uygulamanın o anki kullandığı veritabanı sürücüsüne göre kitaplar, bölümler ve yazılar JSON formatında
dışa aktarılmalıdır. Gruplar isterse kullanıcıya bu dosyayı indirtebilir veya sistemde herhangi bir dizine yerleştirebilir.
- `import.php` - **Gruplar eğer dosyayı indirttiyse**; ziyaretçi bir form ile JSON dosyası yükleyerek uygulamada kitap, bölüm
ve yazıların içe aktarılmasını sağlamalıdır. **Gruplar eğer `export` işleminde herhangi bir dizine çıktıyı sağladıysa**; aynı
dizinden yükleme işlemini yapmalıdır (form göstermeye gerek yok, sadece işlemi yapması yeterli).

---

**Not: Ödevler sadece bireysel değil toplu değerlendirilecektir. Bu sebeple gerekli geliştirmeler için iş bölümlendirilmesinin yapılması gerekiyor. Grup olarak kendi aranızda işleri bölerek beraber çalışma yapın. Kendi aranızda ve diğer gruplarla da yardımlaşabilirsiniz. Eğitmene ve asistanlara da her zaman danışabilirsiniz. :blush:**

**Not: Ödevi olabildiğince _genişletilebilir_ halde geliştirmeye çalışın.**

**Not: Ödevin ilgili kısımlarında hata kontrollerinin yapılması ve herhangi bir hata durumunda istemcinin bilgilendirilmesi gerekiyor.**

**Not: Ödevler manuel kontrol edilecektir.**

---

İyi çalışmalar :wink: :pencil2: 