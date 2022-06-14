# 面試作業

## 1+2 題目

程式存放在 `question/one` 的分支

[主要邏輯](https://github.com/hanshino/rhino/blob/question/one/app/Services/DailySentenceService.php)

[測試程式](https://github.com/hanshino/rhino/blob/question/one/tests/Feature/DailySentenceTest.php)

測試方式:

```bash
./vendor/bin/phpunit tests/Feature/DailySentenceTest.php
```

## 3 題目

程式存放在 `question/three` 的分支

[主要邏輯](https://github.com/hanshino/rhino/tree/question/three/app/Services/DailySentence)

[測試程式](https://github.com/hanshino/rhino/blob/question/three/tests/Feature/DailySentenceTest.php)

### 說明

目的：透過呼叫時指定參數來決定要使用的 **每日一句** 的第三方 API

既然會有兩個第三方 API 就難以保證日後會有更多的 API，為此進行以下設計

-   建立 `trait` [DailySentence](https://github.com/hanshino/rhino/blob/question/three/app/Services/DailySentence/DailySentence.php) 固定會使用到對第三方 API 的請求函式。
-   為各自的第三方 API 建立 `class`，此設計便於後續的擴充，如有新的第三方 API 且使用不同的資料格式，可以建立新的 `method` 對應到新的第三方 API。
    -   [Itsthisforthat](https://github.com/hanshino/rhino/blob/question/three/app/Services/DailySentence/Itsthisforthat.php)
    -   [Metaphorpsum](https://github.com/hanshino/rhino/blob/question/three/app/Services/DailySentence/Metaphorpsum.php)
-   接著建立 `class` [DailySentenceService](https://github.com/hanshino/rhino/blob/question/three/app/Services/DailySentence/DailySentenceService.php) 統一管理所有的第三方 API，並且針對參數來決定要使用的第三方 API。

_註：因為這兩個 API 資料格式皆為 string, 所以暫且將此做為標準進行設計_
