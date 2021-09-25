<?php

// SOLID

// Single-responsibility principle
/*
interface ExportableDocumentInterface
{
    public function export(Document $document): void;
}

class CsvExportableDocument implements ExportableDocumentInterface
{
    public function export(Document $document): void
    {
        echo "CSV için çıktı veriliyor...";
    }
}

class XlsxExportableDocument implements ExportableDocumentInterface
{
    public function export(Document $document): void
    {
        echo "XLSX için çıktı veriliyor...";
    }
}

class Document
{
    public function __construct(
        protected string $title,
        protected string $content
    ) { }
}
*/

// Open-closed Principle

/*
class AuthService
{
    public function login(User $user): bool
    {
        if ($user instanceof MyUser) {
            return $this->authMyUser($user);
        } elseif ($user instanceof ThirdPartyUser) {
           return $this->authThirdPartyUser($user);
        }

        return false;
    }
}
*/

/*
interface Authenticatable
{
    public function auth(UserType $user);
}

class MyUserAuthentication implements Authenticatable
{
    public function auth(UserType $user)
    {
        echo "Benim sisteme göre giriş işlemini yap...";
    }
}

class ThirdPartyAuthentication implements Authenticatable
{
    public function auth(UserType $user)
    {
        echo "3. parti sisteme göre giriş işlemini yap... Mesela sosyal ağ, mesela OAuth vs.";
    }
}

class AuthService
{
     public function login(Authenticatable $authenticatable, UserType $user)
     {
         $authenticatable->auth($user);
     }
}
*/

/*
interface Payable
{
    public function pay(): void;
}

class CreditCardPayment implements Payable
{
    public function pay(): void
    {
        echo "Kredi kartı ile ödeme yapılıyor...";
    }
}

class PaypalPayment implements Payable
{
    public function pay(): void
    {
        echo "Paypal ile ödeme yapılıyor..";
    }
}

class PaymentFactory
{
    public function startPayment(string $type)
    {
        switch ($type) {
            case 'credit-card':
                return new CreditCardPayment();
            case 'paypal':
                return new PaypalPayment();
            default:
                throw new Exception("Ödeme yöntemi bulunamadı!");
        }
    }
}

function odemeYaptir(array $paymentRequest)
{
    $paymentFactory = new PaymentFactory();
    $provider = $paymentFactory->startPayment($paymentRequest['type']);
    $provider->pay($paymentRequest['price']);
}
*/

/*
class Shipping
{
    public function isAllowed(): bool
    {
        return true;
    }

    public function calculate($weight, $destiny): void
    {

    }
}

class WorldWideShipping extends Shipping
{
    public function calculate($weight, $destiny): void
    {

    }
}
*/

// Interface Segregation Principle

/*
interface Workable
{
    public function canCode();
    public function code();
    public function test();
}

class Developer implements Workable
{
    public function canCode()
    {
        return true;
    }

    public function code()
    {
        echo "kodlanıyor...";
    }

    public function test()
    {
        echo "test yapılıyor...";
    }
}

class Tester implements Workable
{
    public function canCode()
    {
        return false;
    }

    public function code()
    {
        throw new Exception("...");
        echo "Kod yazamam!";
    }

    public function test()
    {
        echo "Test işlemi yapıyorum...";
    }
}

function calistir(Workable $workable) {
    if ($workable->canCode()) {
        $workable->code();
    } else {
        $workable->test();
    }
}
*/

interface Codeable
{
    public function code();
}

interface Testable
{
    public function test();
}

abstract class Employee
{

}

class Developer extends Employee implements Codeable, Testable
{
    public function code()
    {
        echo "Kod yazıyorum !";
    }

    public function test()
    {
        echo "Yerelde test ediyorum, yerelde çalışıyordu.";
    }
}

class Tester extends Employee implements Testable
{
    public function test()
    {
        echo "Canlıda test ediyorum!";
    }
}

function execute(Employee $employee) {
    if ($employee instanceof Testable) {
        $employee->test();
    }

    if ($employee instanceof Codeable) {
        $employee->code();
    }
}

// Dependency Inversion Principle

interface UserRepositoryInterface
{
    public function getAllUsers(): array;
}

class UserDbRepository implements UserRepositoryInterface
{
    public function getAllUsers(): array
    {
        return ["Veritabanindan gelen", "kullanıcı", "listesi"];
    }
}

class UserJsonRepository implements UserRepositoryInterface
{
    public function getAllUsers(): array
    {
        return ["json", "dosyasından gelen", "kullanıcılar"];
    }
}

class UserController {

    public function __construct(public UserRepositoryInterface $repository) { }

    public function getUsers() {

        return $this->repository->getAllUsers();
    }
}

$controller = new UserController(new UserDbRepository());
$controller->getUsers();

// STUPID

// KISS

// Tell Don't Ask

/*
$document = $documentProvider->createDocument();

if($document->pageCount() > 1) {
    $document->renderMultiple();
} else {
    $document->renderSingle();
}
*/

$document = $documentProvider->createDocument();

