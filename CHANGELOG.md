# CHANGELOG

## 4.0.0 (2025-11-12)


### Features

* **#2212:** support type info component ([#2349](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2349)) ([86d1a11](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/86d1a110eef76566931be969c3a6651c1f94629d))
* **#2297:** (Symfony 7.1) Add MapRequestPayload array parameter handling ([#2298](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2298)) ([684391a](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/684391a5fab4bdfac752560d3483d0f7109448a5))
* **2056:** support opt out of JMS serializer usage ([#2342](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2342)) ([322c47b](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/322c47b9fa3c5913ec9bbeba537a32407151be73))
* 4.x annotation to attribute migration 5.x ([#2369](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2369)) ([c0a4aee](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/c0a4aee62325be5a2ba101b53ac255bfb2069cc2))
* Add ability to configure UI through configuration ([#2251](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2251)) ([5669b8f](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/5669b8f7be32af1167243ae274814237008f7084))
* add arrays of enums and enum callbacks for query params ([#2096](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2096)) ([d590880](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/d590880facfe7158d681b5d9c93b8b27a06f26cb))
* add possibility to ignore properties from schema ([#2416](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2416)) ([03ea751](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/03ea751ca7cbc6674fa31a4135a7730c639222c5))
* add support for name based serialisation of JMS enums ([#2355](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2355)) ([9ee5f58](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/9ee5f586213fc77c9adc56bd59cc9229a9da2527))
* added symfony/uuid property describer ([#2098](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2098)) ([221a1fe](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/221a1febaf861435b51c80cffd1a78efb4168345))
* apply rule ReturnTypeFromReturnDirectArrayRector from rector ([#2292](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2292)) ([c20a32e](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/c20a32ea35fad19deb23a8a19b77e47e9765f571))
* apply rule TypedPropertyFromStrictConstructor from rector ([#2283](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2283)) ([2d45e53](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/2d45e536b0005bdc7607d71716ec453d11677cbf))
* create top level Tag from Tag annotations ([#2334](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2334)) ([4e66705](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/4e667050c8b8248bd680e3ca06c573c730937605))
* **dependencies:** [#1913](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/1913) - upgrade symfony 60 dependencies ([2ade72d](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/2ade72d0aae64d94024745802a9fb85cf498d6c8))
* migration path for with_annotation to with_attribute ([#2430](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2430)) ([3aaa734](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/3aaa7341473c6138bbfff7c7e3a45ccc6d79c65e))
* pass serialization context to name converter ([#2167](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2167)) ([c55d9ef](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/c55d9ef7852fcfe8c1b1263ea33990de6a54de7a))
* sort processors by priority ([#2196](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2196)) ([c16f6fe](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/c16f6fe0f897548ae64097201fec93f407b4d2b3))
* stoplight as an UI option ([#2443](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2443)) ([c55c47c](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/c55c47c6e586e0d499e7ddafe16681976016949d))
* support configuring all params in alternative name models ([#2345](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2345)) ([958bbcd](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/958bbcd482788a77f34b88a7acdf5720d93e5900))
* support multiple authorisations to be stored and restored ([#2311](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2311)) ([be67a3a](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/be67a3a61fb2a16b36a741ec83ff3dc93d36d68a))
* symfony 7 support ([#2164](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2164)) ([634a16b](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/634a16b0482492419c086a9f176e1344a5f93bae))
* **symfony:** describe MapUploadedFile property ([#2418](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2418)) ([e373f62](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/e373f62f563af700a5614dbcc2c1330b8981c7fc))
* update swagger-ui ([#2154](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2154)) ([b7a5722](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/b7a5722c4fbef6052dcc0aebe8b7b4c5b4ff49a0))


### Bug Fixes

* **#2222:** Fix properties with default values getting marked as required ([#2248](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2248)) ([7f46161](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/7f46161643e6a763f7429184b9031714d74a9745))
* **#2291:** symfony 7.1 - deprecation Symfony\Component\HttpKernel\DependencyInjection\Extension ([#2312](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2312)) ([4f3c4f2](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/4f3c4f2e78689d836d8356eba244ba3c4636bacc))
* **#2300:** fix missing context param UuidPropertyDescriber::describe() ([#2302](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2302)) ([8f43de5](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/8f43de555b5156cc3ee6a28427b675c7c927ce54))
* **#2336:** keep original index key ([#2337](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2337)) ([61a3f8b](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/61a3f8bb95111fade6eace55c071c43da0cc75d9))
* 1885 update psr/log and psr/container ([#1892](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/1892)) ([35cf37e](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/35cf37e338ae0bc5797f186b7c41efda32ed5806))
* **2324:** remove ProcessorInterface usage ([#2332](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2332)) ([fbb94eb](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/fbb94ebc33116fd10a67579c6eb970ff3c3ec067))
* add missing trigger_deprecation calls to deprecated classes, methods ([#2265](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2265)) ([9587aa7](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/9587aa743bb71314e9648c6ae92eab5296ba6ef2))
* attribute validation groups not passed ([#2189](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2189)) ([2360674](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/2360674a7bd8bbf5fb834b08e89662b6ad851618))
* before implementation with custom processors ([#2421](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2421)) ([e44364d](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/e44364dcc321a26e60d6222555a55327d513ca01))
* custom JMS enum type handling ([#2372](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2372)) ([1e283ef](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/1e283ef3ddd6bdaccd95be51dfcb92fdc3d36aa0))
* deprecation warning for usage of "tagged" ([#2429](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2429)) ([f320ae4](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/f320ae4709ac5394ca8d8916aeb261385d0f927e))
* describe nullable enums with allOf ([#2178](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2178)) ([23d157c](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/23d157c02c505e4592ca134b91d22ab35584458c))
* different context uses same model ([#2183](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2183)) ([31da761](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/31da761b6c9d275fb3bbee87c4c6888b17aec4ad))
* do not escape slashes ([#2157](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2157)) ([83e7fdd](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/83e7fdde88181331d5c5795f7b74976b972be981))
* fix some weird bug [Backport 4.x] ([#9](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/9)) ([de3eaeb](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/de3eaeb0c55c9705599b6f2615a5fd6347db54ff))
* Generate operationids properly ([#2266](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2266)) ([2d0f12d](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/2d0f12d7495286350a72d451d9c19b3838dc5564))
* incorrect directory used for updated swagger-ui ([#2379](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2379)) ([9d74fa9](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/9d74fa9874b9f9b13b2fa4f6eb38082c2405c33b))
* incorrect script destination ([#2380](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2380)) ([f981465](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/f981465a888c720a8280fc4f1645f636e385b39a))
* invalid nullable enums with OAS 3.1 version ([f98641d](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/f98641dee93295fbc55c9799699a34254fde0fac))
* **MapQueryParameter:** convert pcre regex to ecma ([#2435](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2435)) ([5298309](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/52983094ec20c33ead8b9a3d20a32445a0f9cef3))
* mark PropertyDescribers with [@final](https://github.com/final) ([#2425](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2425)) ([3b3a978](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/3b3a97820ad2139fda3b1cdab4a5c38dda7c2281))
* move to processor to correct dir ([#2204](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2204)) ([008ae69](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/008ae69267fbf1cc5b25fbf29597790b42a03c45))
* override code based defaults with explicit ones ([#2377](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2377)) ([84c7916](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/84c79161f070e380e0f4d0dfcd2e949146e627c5))
* pass configured openapi version to swagger-php ([#2159](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2159)) ([b415300](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/b4153009220948da67af9b25e4fc04abf3765942))
* pass through serializationContext into models where possible ([#2344](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2344)) ([cb2d65d](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/cb2d65da1cd1e309e7ac6d843652a5df38070353))
* set nullable true when default value is null ([#2390](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2390)) ([8e56941](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/8e5694150fb0f7acfeff437ce14d1fd3bb3292ca))
* stoplight ui height ([#2444](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2444)) ([1497977](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/1497977f82d396f1dda8120434c6d29f3de683e6))
* **SymfonyConstraintAnnotationReader:** disallow null if NotNull attribute is present ([#2329](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2329)) ([ddeb3d4](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/ddeb3d4e5af37ba7e7d9fcb7782a454d8df68d23))
* TESTING backport (very cool simulated fix) ([#10](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/10)) ([0ef60ce](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/0ef60ced0d2dcf4c9f553c3b9d306fb7dba0bd8e))
* Unknown Constraint class when not using symfony/validator ([#2276](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2276)) ([2af8c5d](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/2af8c5d55d48c488ef1a650b9ef7133e3c583623))
* updated swagger-ui to v5.18.1 ([#2378](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2378)) ([b79abc1](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/b79abc1ddd56d7d505c04fb04cc74b53511ee282))
* use iterable check instead of array ([#2239](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2239)) ([a15b592](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/a15b5923602c669007ea53a1a87991e9e147daab))
* use oneOf instead of allOf ([#2156](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2156)) ([d8a9b66](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/d8a9b662612595bb5ae14d07fab39203fe5696a2))


### Reverts

* "Support php7.4 nullable typed properties for JMS serializer." ([#2325](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2325)) ([c952390](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/c9523906023e61351f03dbab8d077173f5ec4883))
* bring back schema to interface ([#2360](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2360)) ([748c6e0](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/748c6e0564688b6dcd0fdb5f73fd5497bbd471f8))


### Miscellaneous Chores

* allow zircote/swagger-php v5 ([#2420](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2420)) ([a2497e1](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/a2497e108281f28f2d79a9ddc2d1795e6c2777e9))
* bump symfony 6.0 to 6.4 ([#2299](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2299)) ([76bddcb](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/76bddcb40d40aae1dbe3f011d344fde32f968409))
* bump symfony 7.x minimum to 7.1 ([#2419](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2419)) ([ff91395](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/ff9139576376695d2c3febc23a5e7eab91866d83))
* cleanup Areas annotation ([#2431](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2431)) ([cdc855e](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/cdc855ef8e6a811336c3a6c72fe99fbe13a78e37))
* **deps:** bump codecov/codecov-action from 4 to 5 ([#2400](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2400)) ([e9be0ec](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/e9be0ec7d3ba0effea75327e2b61217100e0611e))
* **deps:** bump redoc from 2.0.0 to 2.2.0 in /utils ([#2383](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2383)) ([2384711](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/2384711daffaf01ab30d14743a5ce3422bbe8246))
* **deps:** bump redoc from 2.2.0 to 2.4.0 in /utils ([#2442](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2442)) ([8b3accb](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/8b3accb25d87869ee6be36bebebae53c72f15e16))
* **deps:** bump stefanzweifel/git-auto-commit-action from 4 to 5 ([#2382](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2382)) ([46affd6](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/46affd66301407b7607129b51f101e7cae3fe203))
* **deps:** bump swagger-ui-dist from 5.18.1 to 5.18.2 in /utils ([#2384](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2384)) ([170f062](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/170f062e7cc7f98a285fa16dae5485f14dccc76d))
* **deps:** bump swagger-ui-dist from 5.18.2 to 5.18.3 in /utils ([#2438](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2438)) ([a482abd](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/a482abdcac37d6238819a99dd84250963f0cb442))
* **deps:** bump swagger-ui-dist from 5.18.3 to 5.20.0 in /utils ([#2449](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2449)) ([99429c9](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/99429c9c8bd2c50a75db0392be3a2b338564752b))
* fix ci ([#2343](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2343)) ([5eda246](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/5eda246090b3721be5b0c1d08c6570b56605ac1c))
* fix ci ([#2352](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2352)) ([9b91d23](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/9b91d2376888c2dacf4192b103a7ff7f67112bf5))
* prepare 4.30.0 release ([#2338](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2338)) ([277fa17](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/277fa17b912be31b5170e49f0924b1028058c938))
* prepare 4.32.0 ([#2347](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2347)) ([6ea7027](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/6ea702702ffb3382e9fd9776c868ff7386dbc772))
* remove old symfony compatibility logic ([#2357](https://github.com/DjordyKoert/NelmioApiDocBundle/issues/2357)) ([3d05e0e](https://github.com/DjordyKoert/NelmioApiDocBundle/commit/3d05e0e25702d5a2d50ad8d95154a7d2dc6e979b))

## 4.38.2
- Support of attribute MapQueryParameter with a regexp has been improved, it now converts the regexp from PCRE to ECMA-262 for better compliance with OpenApi. 

## 4.38.0
* Added a `#[Ignore]` attribute that allows a property to be excluded from the generated schema.
```php
<?php

use Nelmio\ApiDocBundle\Attribute\Ignore;

class Foo
{
    #[Ignore]
    private string $ignoredProperty;
}
```
* Added support for the `#[MapUploadedFile]` symfony controller argument attribute

## 4.37.0
* Added Stoplight as an alternative UI option. https://stoplight.io/open-source/elements.

## 4.36.1
- Passing an array key `value` with a list of strings to the `Areas` annotation/attribute is deprecated. Pass the list of strings directly.
```diff
-#[Areas(properties: ['value' => ['foo', 'bar']])]
+#[Areas(properties: ['foo', 'bar'])]

-#[Areas(['value' => ['foo', 'bar']])]
+#[Areas(['foo', 'bar'])]
```

## 4.36.0
* Configuration option `with_annotation` has been deprecated in favor of `with_attribute`
```diff
nelmio_api_doc:
    areas:
        path_patterns:
            - ^/api/foo
-       with_annotation: true
+       with_attribute: true
```

## 4.35.0
* Added support for the symfony/type-info component
```yaml
nelmio_api_doc:
  type_info: true
```

## 4.34.0
* Changed minimum Symfony version for 7.x from 7.0 to 7.1

## 4.33.6
* Fixed Symfony 7.2 deprecation of tagged arguments

## 4.33.5
* Added new optional parameter `$context` to` PropertyDescriberInterface::supports()`

## 4.33.4
* Deprecated `null` type from `$options` in `Nelmio\ApiDocBundle\Attribute\Model::__construct()`. Pass an empty array (`[]`) instead.
* Deprecated `null` type from `$options` in `NNelmio\ApiDocBundle\Attribute\Model::__construct()`. Pass an empty array (`[]`) instead.

## 4.33.3
* Bumped swagger-ui files from `5.18.1` to `5.18.2`
* Bumped redoc files to `2.2.0`

## 4.33.2
* Fixed incorrect directory updated for swagger-ui files from version `4.33.2`

## 4.33.1
* Bumped swagger-ui files to `5.18.1`
* Fixed explicitly set default values defined in `#[OA\Property]` being overwritten

## 4.33.0
* Fixed custom JMS enum type handling
* Added support for name based serialisation of JMS enums

## 4.32.3

* Deprecated `Nelmio\ApiDocBundle\Annotation` namespace in favor of `Nelmio\ApiDocBundle\Attribute` namespace in preparation for 5.x. Consider upgrading to the new attribute syntax.
```diff 
- use Nelmio\ApiDocBundle\Annotation\Areas;
- use Nelmio\ApiDocBundle\Annotation\Model;
- use Nelmio\ApiDocBundle\Annotation\Operation;
- use Nelmio\ApiDocBundle\Annotation\Security;

+ use Nelmio\ApiDocBundle\Attribute\Areas;
+ use Nelmio\ApiDocBundle\Attribute\Model;
+ use Nelmio\ApiDocBundle\Attribute\Operation;
+ use Nelmio\ApiDocBundle\Attribute\Security;
```


## 4.32.0

* Added support to configure `options` and `serializationContext` via `nelmio_api_doc.models.names`.
* Fixed `serializationContext` not being applied to nested models.

## 4.31.0

* Added support to opt out of JMS serializer usage per endpoint by setting `useJms` in the serializationContext.
  ```php
  #[OA\Response(response: 200, content: new Model(type: UserDto::class, serializationContext: ["useJms" => false]))]
  ```

## 4.30.0
* Create top level OpenApi Tag from Tags top level annotations/attributes

## 4.25.3

* Calling `DocumentationExtension::getExtendedType()` has been deprecated in favor of `DocumentationExtension::getExtendedTypes()` to align with the deprecation introduced with `symfony/symfony` version `4.2`.


## 4.26.0

* Add ability to configure UI through configuration
```yaml
nelmio_api_doc:
  html_config:
    assets_mode: bundle
    redocly_config:
      expandResponses: '200,201'
      hideDownloadButton: true
    swagger_ui_config:
      deepLinking: true
```

## 4.25.0

* Added support for [JMS @Discriminator](https://jmsyst.com/libs/serializer/master/reference/annotations#discriminator) annotation/attribute
  ```php
  #[\JMS\Serializer\Annotation\Discriminator(field: 'type', map: ['car' => Car::class, 'plane' => Plane::class])]
  abstract class Vehicle { }
  class Car extends Vehicle { }
  class Plane extends Vehicle { }
  ```

## 4.24.0

* Added support for some integer ranges (https://phpstan.org/writing-php-code/phpdoc-types#integer-ranges).  
  Annotations attached to integer properties like:
  ```php
    /**
     * @var int<6, 11>
     * @var int<min, 11>
     * @var int<6, max>
     * @var positive-int
     * @var negative-int
     */
  ```
  will be interpreted as appropriate `minimum` and `maximum` properties in the generated OpenAPI specification.

### Minor breaking change
Dropped support for PHP 7.2 and PHP 7.3. PHP 7.4 is the minimum required version now.

## 4.23.0

* Cache configuration option `nelmio_api_doc.cache.item_id` now automatically gets the area appended.
  ```yml
  nelmio_api_doc:
      cache:
          pool: app.cache
          item_id: nelmio_api_doc.docs
      areas:
          default: 
              ...
          area1:   
              ...
  ```
  Result in cache keys: `nelmio_api_doc.docs.default` & `nelmio_api_doc.docs.area1` to be used respectively.
* Added cache configuration option per area.
  ```yml
  nelmio_api_doc:
      areas:
          default: # Manual cache configuration
              cache:
                  pool: app.cache
                  item_id: nelmio_api_doc.docs.default
              ...
          area1:   
              cache:
                  pool: app.cache
                  item_id: nelmio_api_doc.docs.area1
              ...
  ```
  Non-configured options will be inherited from `nelmio_api_doc.cache`.
* Fixed vendor extensions (`x-*`) from configuration not being outputted in the generated specification.
  ```yml
  nelmio_api_doc:
      documentation:
          info:
              title: 'My API'
              description: 'My API description'
              x-foo: 'bar'
  ```
  Now results in JSON specification:
  ```json
  {
    ...
    "info": {
      "title": "API",
      "version": "1.0",
      "x-foo": "bar"
    },
    ...
  }
  ```
* Updated nullable enum handling to align with the behaviour of other object types. It now uses wraps nullable enums with `oneOf` instead of `allOf`.

## 4.22.0

* Updated bundle directory structure to recommended file structure as described in https://symfony.com/doc/7.0/bundles/best_practices.html.

  It might be necessary to reinstall the assets:
  ```bash
    bin/console assets:install
  ```

### Breaking change
If your codebase mentions a file or directory by path then an update to this path is necessary. For example to following configuration:
```yaml
doc-api:
    resource: "@NelmioApiDocBundle/Resources/config/routing/swaggerui.xml"
    prefix: /api/doc
```
Becomes:
```yaml
doc-api:
    resource: "@NelmioApiDocBundle/config/routing/swaggerui.xml"
    prefix: /api/doc
```

## 4.21.0

* Added bundle configuration options `nelmio_api_doc.cache.pool` and `nelmio_api_doc.cache.item_id`.
  ```yml
  nelmio_api_doc:
      cache:
          pool: app.cache
          item_id: nelmio_api_doc.docs
  ```
  
## 4.20.0

* Added Redocly as an alternative to Swagger UI. https://github.com/Redocly/redoc.
* Added support for describing dictionary types in OpenAPI 3.0.

## 4.17.0

* Passing groups to `PropertyDescriberInterface::describe()` via the `$groups` parameter is deprecated, the parameter will get removed in a future version. Pass groups via `$context['groups']` instead.


## 4.0.0

* Added support of OpenAPI 3.0. The internals were completely reworked and this version introduces BC breaks.

## 3.7.0


* Added `@SerializedName` annotation support and name converters when using Symfony >= 4.2.
* Removed pattern added from the Expression Violation message.
* Added FOSRestBundle 3.x support
* Added `@SWG` annotations support at methods level in models

## 3.3.0


* Usage of Google Fonts was removed. System fonts `serif` / `sans` will be used instead.
  This can lead to a different look on different operating systems.
  You can [re-add Google Fonts again manually by overriding the template](https://symfony.com/doc/current/bundles/NelmioApiDocBundle/faq.html#re-add-google-fonts).

* The Twig template for the Swagger UI now contains blocks to make it easier to overwrite certain parts.
  See the [official documentation](https://symfony.com/doc/current/bundles/NelmioApiDocBundle/customization.html) how to do this.

## 3.2.0 (2018-03-24)

* Add a documentation form extension. Use the ``documentation`` option to define how a form field is documented.
* Allow references to config definitions in controllers.
* Using `@Model` implicitly in `@SWG\Schema`, `@SWG\Items` and `@SWG\Property` is deprecated. Use `ref=@Model()` instead.

  Before:
  ```php
  /**
   * This was considered as an array of models.
   *
   * @SWG\Property(@Model(type=FooClass::class))
   */
  ```

  After:
  ```php
  /**
   * For an individual object:
   * @SWG\Property(ref=@Model(type=FooClass::class))
   *
   * For an array:
   * @SWG\Property(type="array", @SWG\Items(ref=@Model(type=FooClass::class)))
   */
  ```

Config
* `nelmio_api_doc.areas` added support to filter by host patterns.

  ```yml
  nelmio_api_doc:
      areas: [ host_patterns: [ ^api\. ] ]
  ```

* Added dependency for "symfony/options-resolver:^3.4.4|^4.0"

## 3.1.0 (2018-01-28)

* Added Symfony Validator constraints support

Symfony Forms
* Support for boolean checkbox
* Support for integer

JMS Serializer
* Support JMS `int` (alias for `integer`)
* Also process phpdoc annotations

SwaggerPHP
* Handle `enum` and `default` properties from SwaggerPHP annotation
* Support `@Security` annotations

Config
* `nelmio_api_doc.routes` has been replaced by `nelmio_api_doc.areas`. Please update your config accordingly.

  Before:
  ```yml
  nelmio_api_doc:
      routes: [ path_patterns: [ /api ] ]
  ```

  After:
  ```yml
  nelmio_api_doc:
      areas: [ path_patterns: [ /api ] ]
  ```

## 3.0.0 (2017-12-10)

Large refactoring introducing `zircote/swagger-php` for swagger annotations.

See UPGRADE-3.0.md for upgrading instructions.
