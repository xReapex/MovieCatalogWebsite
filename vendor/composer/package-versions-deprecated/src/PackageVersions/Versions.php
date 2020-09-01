<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see \Composer\InstalledVersions::getRootPackage()} instead. The
     *             equivalent expression for this constant's contents is
     *             `\Composer\InstalledVersions::getRootPackage()['name']`.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'amphp/amp' => 'v2.5.0@f220a51458bf4dd0dedebb171ac3457813c72bbc',
  'amphp/byte-stream' => 'v1.8.0@f0c20cf598a958ba2aa8c6e5a71c697d652c7088',
  'amphp/cache' => 'v1.4.0@e7bccc526fc2a555d59e6ee8380eeb39a95c0835',
  'amphp/dns' => 'v1.2.3@852292532294d7972c729a96b49756d781f7c59d',
  'amphp/hpack' => 'v3.1.0@0dcd35f9a8d9fc04d5fb8af0aeb109d4474cfad8',
  'amphp/http' => 'v1.6.0@8a1a1d6a78e6f432618aea02c6351602cf735cef',
  'amphp/http-client' => 'v4.5.0@39099a5ad69379eb90f2ca83c082b276539328b9',
  'amphp/http-tunnel' => 'v1.0.0@074b70d1fdba6c3c270b411e0290ed7c48edf53c',
  'amphp/parser' => 'v1.0.0@f83e68f03d5b8e8e0365b8792985a7f341c57ae1',
  'amphp/process' => 'v1.1.0@355b1e561b01c16ab3d78fada1ad47ccc96df70e',
  'amphp/serialization' => 'v1.0.0@693e77b2fb0b266c3c7d622317f881de44ae94a1',
  'amphp/socket' => 'v1.1.3@b9064b98742d12f8f438eaf73369bdd7d8446331',
  'amphp/sync' => 'v1.4.0@613047ac54c025aa800a9cde5b05c3add7327ed4',
  'amphp/windows-registry' => 'v0.3.3@0f56438b9197e224325e88f305346f0221df1f71',
  'composer/package-versions-deprecated' => '1.10.99.1@68c9b502036e820c33445ff4d174327f6bb87486',
  'daverandom/libdns' => 'v2.0.2@e8b6d6593d18ac3a6a14666d8a68a4703b2e05f9',
  'doctrine/annotations' => '1.10.4@bfe91e31984e2ba76df1c1339681770401ec262f',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.1.0@0fb513842c78b43770597ef3c487cdf79d944db3',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.19@840d5603eb84cc81a6a0382adac3293e57c1c64c',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'kelunik/certificate' => 'v1.1.2@56542e62d51533d04d0a9713261fea546bff80f6',
  'knplabs/knp-components' => 'v2.4.2@8486446af9591c9c3decaae6c234739288c80a5f',
  'knplabs/knp-paginator-bundle' => 'v5.3.0@87ca999b6ac886e3f20a1e3abc07523140509ca4',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.1.0@4939c81f63a8a4968c108c440275c94955753b19',
  'league/uri' => '6.3.0@aa3babf16e9d7535544bd94e3def026ac56640f3',
  'league/uri-interfaces' => '2.1.0@0068a469958895ceaf3afcb489c0258adfa1e406',
  'league/uri-parser' => '1.4.1@671548427e4c932352d9b9279fdfa345bf63fa00',
  'monolog/monolog' => '2.1.1@f9eee5cec93dfb313a38b6b288741e84e53f02d5',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.1@d870572532cd70bc3fab58f2e23ad423c8404c44',
  'phpdocumentor/type-resolver' => '1.3.0@e878a14a65245fbe78f8080eba03b47c3b705651',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'sensio/framework-extra-bundle' => 'v5.5.6@b49f079d8a87a6e6dd434062085ff5a132af466b',
  'symfony/asset' => 'v5.1.3@2f07b5993f1607c1c489bac3e15a000c33668b4b',
  'symfony/cache' => 'v5.1.3@a9ac09a5e9786b734a4baa98158c2cd3251f1e4c',
  'symfony/cache-contracts' => 'v2.1.3@9771a09d2e6b84ecb8c9f0a7dbc72ee92aeba009',
  'symfony/config' => 'v5.1.3@cf63f0613a6c6918e96db39c07a43b01e19a0773',
  'symfony/console' => 'v5.1.3@2226c68009627934b8cfc01260b4d287eab070df',
  'symfony/dependency-injection' => 'v5.1.3@c45c3f26d2ae7c5239e5ad420b0c2717dbbc0bcb',
  'symfony/deprecation-contracts' => 'v2.1.3@5e20b83385a77593259c9f8beb2c43cd03b2ac14',
  'symfony/doctrine-bridge' => 'v5.1.3@e88743167c3edc667f809f9b3558954bde1fbd89',
  'symfony/dotenv' => 'v5.1.3@42d2a18597f4c7cafc0e25b1ad6a1cbb4f2caf05',
  'symfony/error-handler' => 'v5.1.3@4a0d1673a4731c3cb2dea3580c73a676ecb9ed4b',
  'symfony/event-dispatcher' => 'v5.1.3@7827d55911f91c070fc293ea51a06eec80797d76',
  'symfony/event-dispatcher-contracts' => 'v2.1.3@f6f613d74cfc5a623fc36294d3451eb7fa5a042b',
  'symfony/expression-language' => 'v5.1.3@6675d937852379a251017db6e5144dd57506fbbd',
  'symfony/filesystem' => 'v5.1.3@6e4320f06d5f2cce0d96530162491f4465179157',
  'symfony/finder' => 'v5.1.3@4298870062bfc667cb78d2b379be4bf5dec5f187',
  'symfony/flex' => 'v1.9.1@0e752e47d8382361ca2d7ef016f549828185ddb6',
  'symfony/form' => 'v5.1.3@bd264b81ab801abea3c44f43aeb6eacf68beaca7',
  'symfony/framework-bundle' => 'v5.1.3@f9be9af9092f165b9b809d870289b57330301dc6',
  'symfony/http-client' => 'v5.1.3@050dc633a598bdadbd49449500c87e30dabe5c58',
  'symfony/http-client-contracts' => 'v2.1.3@cd88921e9add61f2064c9c6b30de4f589db42962',
  'symfony/http-foundation' => 'v5.1.3@1f0d6627e680591c61e9176f04a0dc887b4e6702',
  'symfony/http-kernel' => 'v5.1.3@d6dd8f6420e377970ddad0d6317d4ce4186fc6b3',
  'symfony/intl' => 'v5.1.3@7299f8c95ffd2623986c976fb8c48beb4c4cb44d',
  'symfony/mailer' => 'v5.1.3@90c5023ca4be2d2f403a1b6e068395c516a97fce',
  'symfony/mime' => 'v5.1.3@149fb0ad35aae3c7637b496b38478797fa6a7ea6',
  'symfony/monolog-bridge' => 'v5.1.3@81e8c7692b78161a06f779c741ef21d80f217175',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/notifier' => 'v5.1.3@19699652eaa69b0389bc985853f29b8e9177b1cf',
  'symfony/options-resolver' => 'v5.1.3@9ff59517938f88d90b6e65311fef08faa640f681',
  'symfony/orm-pack' => 'v2.0.0@46aa731f213140388ee11ff3d2b6776a3b4a0d90',
  'symfony/polyfill-intl-grapheme' => 'v1.18.1@b740103edbdcc39602239ee8860f0f45a8eb9aa5',
  'symfony/polyfill-intl-icu' => 'v1.18.1@4e45a6e39041a9cc78835b11abc47874ae302a55',
  'symfony/polyfill-intl-idn' => 'v1.18.1@5dcab1bc7146cf8c1beaa4502a3d9be344334251',
  'symfony/polyfill-intl-normalizer' => 'v1.18.1@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php73' => 'v1.18.1@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.1@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/process' => 'v5.1.3@1864216226af21eb76d9477f691e7cbf198e0402',
  'symfony/property-access' => 'v5.1.3@eb617a57fc38f43bf4208dcbdb2dab3c14d9cbd9',
  'symfony/property-info' => 'v5.1.3@0c4813930953f6db6c62ebec8ee695a897b89020',
  'symfony/routing' => 'v5.1.3@08c9a82f09d12ee048f85e76e0d783f82844eb5d',
  'symfony/security-bundle' => 'v5.1.3@7e64ee9df4f7565133c745244816be65db8aed0a',
  'symfony/security-core' => 'v5.1.3@18551ee726b18591d1da5c3209d61f5904fff3b3',
  'symfony/security-csrf' => 'v5.1.3@962323e4db4458d731d5006f14019a22a2f84b06',
  'symfony/security-guard' => 'v5.1.3@85c368be963e9f0df9e93d830f966fc0af531703',
  'symfony/security-http' => 'v5.1.3@436e749842736bd047c96ae53e86a8b6dc9d2222',
  'symfony/serializer' => 'v5.1.3@c977301a898088f483f7a9b479dd050d84ef3fed',
  'symfony/serializer-pack' => 'v1.0.3@9bbce72dcad0cca797b678d3bfb764cf923ab28a',
  'symfony/service-contracts' => 'v2.1.3@58c7475e5457c5492c26cc740cc0ad7464be9442',
  'symfony/stopwatch' => 'v5.1.3@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'symfony/string' => 'v5.1.3@f629ba9b611c76224feb21fe2bcbf0b6f992300b',
  'symfony/translation' => 'v5.1.3@4b9bf719f0fa5b05253c37fc7b335337ec7ec427',
  'symfony/translation-contracts' => 'v2.1.3@616a9773c853097607cf9dd6577d5b143ffdcd63',
  'symfony/twig-bridge' => 'v5.1.3@44bba5d7e5cb8a3ddeb640ae00938cc768c55797',
  'symfony/twig-bundle' => 'v5.1.3@8898ef8aea8fa48638e15ce00c7c6318ce570ce1',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v5.1.3@03aeabbff76771ef467a4d9a0574c427bb81d932',
  'symfony/var-dumper' => 'v5.1.3@2ebe1c7bb52052624d6dc1250f4abe525655d75a',
  'symfony/var-exporter' => 'v5.1.3@eabaabfe1485ca955c5b53307eade15ccda57a15',
  'symfony/web-link' => 'v5.1.3@ba2554887e34e693e3888f23f83c72d5ce04bfb2',
  'symfony/yaml' => 'v5.1.3@ea342353a3ef4f453809acc4ebc55382231d4d23',
  'twbs/bootstrap' => 'v4.0.0@8a628b943cf31ca0a002c08af661a95772480225',
  'twig/extra-bundle' => 'v3.0.5@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/intl-extra' => 'v3.0.5@6f1889920753e6ffd72b06fc1d9b363ec2cec540',
  'twig/string-extra' => 'v3.0.5@8e9b436d25b9473e9dc163c83cff1eb9f5dd68c4',
  'twig/twig' => 'v3.0.5@9b76b1535483cdf4edf01bb787b0217b62bd68a5',
  'vfalies/tmdb' => '1.8.3@0b84ea7c60d32fb06254a0b3125d9783cfbab0a7',
  'webimpress/safe-writer' => '2.0.1@d6e879960febb307c112538997316371f1e95b12',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'doctrine/data-fixtures' => '1.4.3@7ebac50901eb4516816ac39100dba1759d843943',
  'doctrine/doctrine-fixtures-bundle' => '3.3.1@39defca57ee0949e1475c46177b30b6d1b732e8f',
  'nikic/php-parser' => 'v4.9.0@aaee038b912e567780949787d5fe1977be11a778',
  'symfony/browser-kit' => 'v5.1.3@b9545e08790be2d3d7d92306e339bbcd79f461e4',
  'symfony/css-selector' => 'v5.1.3@e544e24472d4c97b2d11ade7caacd446727c6bf9',
  'symfony/debug-bundle' => 'v5.1.3@3f4bcea52678eedf19260973217f5ae7b835edf5',
  'symfony/debug-pack' => 'v1.0.8@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dom-crawler' => 'v5.1.3@a96aecb36aaf081f1b012e1e62d71f1069ab3dca',
  'symfony/maker-bundle' => 'v1.20.0@b048c7b2be5bce9024ae3b0db97d44a107029c27',
  'symfony/phpunit-bridge' => 'v5.1.3@964bd57046dfa48687e1412fe5f8006adfcb9675',
  'symfony/profiler-pack' => 'v1.0.5@29ec66471082b4eb068db11eb4f0a48c277653f7',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v5.1.3@6d32d311d9d599830f57a2fe6bb6e38970150acd',
  'paragonie/random_compat' => '2.*@b48112360136c10f33c296ef1527cbe6915ae01c',
  'symfony/polyfill-ctype' => '*@b48112360136c10f33c296ef1527cbe6915ae01c',
  'symfony/polyfill-iconv' => '*@b48112360136c10f33c296ef1527cbe6915ae01c',
  'symfony/polyfill-php72' => '*@b48112360136c10f33c296ef1527cbe6915ae01c',
  'symfony/polyfill-php71' => '*@b48112360136c10f33c296ef1527cbe6915ae01c',
  'symfony/polyfill-php70' => '*@b48112360136c10f33c296ef1527cbe6915ae01c',
  'symfony/polyfill-php56' => '*@b48112360136c10f33c296ef1527cbe6915ae01c',
  '__root__' => 'dev-master@b48112360136c10f33c296ef1527cbe6915ae01c',
);

    private function __construct()
    {
        class_exists(InstalledVersions::class);
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false)) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}