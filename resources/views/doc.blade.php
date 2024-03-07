<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Документація проекту</title>
  <style>
    body {
      margin: 20px;
    }

    p, pre {
      font-weight: bold;
      margin: 0;
      padding: 0;
    }
    
    h3 {
      margin-bottom: 10px;
    }

    .accordion-item {
      width: 1200px;
      margin-bottom: 10px;
    }

    .accordion-body {
      padding: 0px;
      padding-top: 20px;
    }

    .accordion-button {
      background-color: #f8f9fa;
      white-space: nowrap;
    }

    span {
      color: red;
    }
  </style>
</head>

<body>
  <h3>Документація проекту</h3>
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading1">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"
          aria-expanded="false" aria-controls="collapse1">
          <p>GET <u>/api/category</u></p>
        </button>
      </h2>
      <div id="collapse1" class="accordion-collapse collapse collapsed" aria-labelledby="heading1"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <pre>
            [
              {
                <span>"id"</span>: 1,
                <span>"name"</span>: "Телефони",
                <span>"created_at"</span>: "2023-12-23T15:11:43.000000Z",
                <span>"updated_at"</span>: "2023-12-23T15:11:43.000000Z"
              },
              {
                <span>"id"</span>: 2,
                <span>"name"</span>: "Комп'ютери",
                <span>"created_at"</span>: "2023-12-23T15:11:43.000000Z",
                <span>"updated_at"</span>: "2023-12-23T15:11:43.000000Z"
              },
              {
                <span>"id"</span>: 3,
                <span>"name"</span>: "Монітори",
                <span>"created_at"</span>: "2024-02-21T22:06:25.000000Z",
                <span>"updated_at"</span>: "2024-02-21T22:06:25.000000Z"
              },
              {
                <span>"id"</span>: 4,
                <span>"name"</span>: "Пилососи",
                <span>"created_at"</span>: "2024-02-21T22:06:37.000000Z",
                <span>"updated_at"</span>: "2024-02-21T22:06:37.000000Z"
              },
              {
                <span>"id"</span>: 5,
                <span>"name"</span>: "Холодильники",
                <span>"created_at"</span>: "2024-02-21T22:06:57.000000Z",
                <span>"updated_at"</span>: "2024-02-21T22:06:57.000000Z"
              },
              {
                <span>"id"</span>: 6,
                <span>"name"</span>: "Телевізори",
                <span>"created_at"</span>: "2024-02-21T22:12:15.000000Z",
                <span>"updated_at"</span>: "2024-02-21T22:12:15.000000Z"
              },
              {
                <span>"id"</span>: 7,
                <span>"name"</span>: "Хлібопічки",
                <span>"created_at"</span>: "2024-02-21T22:12:26.000000Z",
                <span>"updated_at"</span>: "2024-02-21T22:12:26.000000Z"
              }
            ]
        </pre>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2"
          aria-expanded="false" aria-controls="collapse2">
          <p>GET <u>/api/product_brand</u></p>
        </button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <pre>
            [
              {
                <span>"id"</span>: 1,
                <span>"brand"</span>: "Samsung",
                <span>"created_at"</span>: "2024-03-06T22:41:44.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:41:44.000000Z"
              },
              {
                <span>"id"</span>: 2,
                <span>"brand"</span>: "Xiaomi",
                <span>"created_at"</span>: "2024-03-06T22:41:44.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:41:44.000000Z"
              },
              {
                <span>"id"</span>: 3,
                <span>"brand"</span>: "LG",
                <span>"created_at"</span>: "2024-03-06T22:41:44.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:41:44.000000Z"
              },
              {
                <span>"id"</span>: 4,
                <span>"brand"</span>: "GameMax",
                <span>"created_at"</span>: "2024-03-06T22:41:44.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:41:44.000000Z"
              },
              {
                <span>"id"</span>: 5,
                <span>"brand"</span>: "Zalman",
                <span>"created_at"</span>: "2024-03-06T22:41:44.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:41:44.000000Z"
              },
              {
                <span>"id"</span>: 6,
                <span>"brand"</span>: "Chieftec",
                <span>"created_at"</span>: "2024-03-06T22:41:44.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:41:44.000000Z"
              },
              {
                <span>"id"</span>: 7,
                <span>"brand"</span>: "DeepCool",
                <span>"created_at"</span>: "2024-03-06T22:41:44.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:41:44.000000Z"
              },
              {
                <span>"id"</span>: 8,
                <span>"brand"</span>: "HyperX",
                <span>"created_at"</span>: "2024-03-06T22:41:44.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:41:44.000000Z"
              }
            ]
          </pre>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
          <p>GET <u>/api/question</u></p>
        </button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <pre>
            [
              {
                <span>"id"</span>: 1,
                <span>"fullname"</span>: "Олена",
                <span>"phone"</span>: "+380661666755",
                <span>"email"</span>: "example1@gmail.com",
                <span>"question_category_id"</span>: 3,
                <span>"product_brand_id"</span>: 1,
                <span>"question"</span>: "Текст 1",
                <span>"created_at"</span>: "2024-03-06T23:25:42.000000Z",
                <span>"updated_at"</span>: "2024-03-06T23:25:42.000000Z"
              },
              {
                <span>"id"</span>: 2,
                <span>"fullname"</span>: "Ярослав",
                <span>"phone"</span>: "+380661666755",
                <span>"email"</span>: "example2@gmail.com",
                <span>"question_category_id"</span>: 4,
                <span>"product_brand_id"</span>: 4,
                <span>"question"</span>: "Текст 2",
                <span>"created_at"</span>: "2024-03-06T23:26:03.000000Z",
                <span>"updated_at"</span>: "2024-03-06T23:26:03.000000Z"
              },
              {
                <span>"id"</span>: 3,
                <span>"fullname"</span>: "Ірина",
                <span>"phone"</span>: "+380661666755",
                <span>"email"</span>: "example3@gmail.com",
                <span>"question_category_id"</span>: 1,
                <span>"product_brand_id"</span>: 4,
                <span>"question"</span>: "Текст 3",
                <span>"created_at"</span>: "2024-03-06T23:26:23.000000Z",
                <span>"updated_at"</span>: "2024-03-06T23:26:23.000000Z"
              }
            ]
          </pre>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading4">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
          <p>GET <u>/api/question_category</u></p>
        </button>
      </h2>
      <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <pre>
            [
              {
                <span>"id"</span>: 1,
                <span>"name"</span>: "Місцерозташування/час роботи",
                <span>"created_at"</span>: "2024-02-14T22:30:30.000000Z",
                <span>"updated_at"</span>: "2024-02-15T22:30:30.000000Z"
              },
              {
                <span>"id"</span>: 2,
                <span>"name"</span>: "Ціни",
                <span>"created_at"</span>: "2024-02-15T22:32:39.000000Z",
                <span>"updated_at"</span>: "2024-02-15T22:32:39.000000Z"
              },
              {
                <span>"id"</span>: 3,
                <span>"name"</span>: "Технічна консультація",
                <span>"created_at"</span>: "2024-02-15T22:33:05.000000Z",
                <span>"updated_at"</span>: "2024-02-15T22:33:05.000000Z"
              },
              {
                <span>"id"</span>: 4,
                <span>"name"</span>: "Купити аксесуари",
                <span>"created_at"</span>: "2024-02-15T22:33:24.000000Z",
                <span>"updated_at"</span>: "2024-02-15T22:33:24.000000Z"
              },
              {
                <span>"id"</span>: 5,
                <span>"name"</span>: "Інше",
                <span>"created_at"</span>: "2024-02-15T22:32:39.000000Z",
                <span>"updated_at"</span>: "2024-02-15T22:33:05.000000Z"
              }
            ]
          </pre>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading5">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
          <p>GET <u>/api/review</u></p>
        </button>
      </h2>
      <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <pre>
            [
              {
                <span>"id"</span>: 1,
                <span>"fullname"</span>: "Олексій",
                <span>"phone"</span>: "+380661666755",
                <span>"email"</span>: "111@example.com",
                <span>"review_type_id"</span>: 1,
                <span>"text"</span>: "Дуже задоволений роботою сервісного центру, швидко виправили поломку і ціна була доступною. Рекомендую!",
                <span>"created_at"</span>: "2024-03-06T22:31:05.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:31:05.000000Z"
              },
              {
                <span>"id"</span>: 2,
                <span>"fullname"</span>: "Ірина",
                <span>"phone"</span>: "+380661666755",
                <span>"email"</span>: "222@example.com",
                <span>"review_type_id"</span>: 2,
                <span>"text"</span>: "Моя хлібопічка знову працює як нова після візиту до сервісного центру. Професіональний підхід і швидка робота.",
                <span>"created_at"</span>: "2024-03-06T22:31:05.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:31:05.000000Z"
              },
              {
                <span>"id"</span>: 3,
                <span>"fullname"</span>: "Петро",
                <span>"phone"</span>: "+380661666755",
                <span>"email"</span>: "333@example.com",
                <span>"review_type_id"</span>: 2,
                <span>"text"</span>: "Велике спасибі за швидке виправлення мого телефону. Якість обслуговування на висоті!",
                <span>"created_at"</span>: "2024-03-06T22:31:05.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:31:05.000000Z"
              },
              {
                <span>"id"</span>: 4,
                <span>"fullname"</span>: "Ольга",
                <span>"phone"</span>: "+380661666755",
                <span>"email"</span>: "444@example.com",
                <span>"review_type_id"</span>: 3,
                <span>"text"</span>: "Привітний персонал, якісний ремонт і швидка доставка. Дуже задоволений результатом.",
                <span>"created_at"</span>: "2024-03-06T22:31:05.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:31:05.000000Z"
              },
              {
                <span>"id"</span>: 5,
                <span>"fullname"</span>: "Василь",
                <span>"phone"</span>: "+380661666755",
                <span>"email"</span>: "555@example.com",
                <span>"review_type_id"</span>: 1,
                <span>"text"</span>: "Сервісний центр врятував мій холодильник! Професіонали своєї справи, рекомендую звертатися саме сюди.",
                <span>"created_at"</span>: "2024-03-06T22:31:05.000000Z",
                <span>"updated_at"</span>: "2024-03-06T22:31:05.000000Z"
              }
            ]
          </pre>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading6">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
          <p>GET <u>/api/review_type</u></p>
        </button>
      </h2>
      <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <pre>
            [
              {
                <span>"id"</span>: 1,
                <span>"name"</span>: "Звичайний відгук",
                <span>"created_at"</span>: "2024-02-15T19:01:30.000000Z",
                <span>"updated_at"</span>: "2024-02-15T19:01:30.000000Z"
              },
              {
                <span>"id"</span>: 2,
                <span>"name"</span>: "Потрібно покращити",
                <span>"created_at"</span>: "2024-02-15T19:01:30.000000Z",
                <span>"updated_at"</span>: "2024-02-15T19:01:30.000000Z"
              },
              {
                <span>"id"</span>: 3,
                <span>"name"</span>: "Інше",
                <span>"created_at"</span>: "2024-02-15T19:01:30.000000Z",
                <span>"updated_at"</span>: "2024-02-15T19:01:30.000000Z"
              }
            ]
          </pre>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading7">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
          <p>GET <u>/api/order</u></p>
        </button>
      </h2>
      <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <pre>
            [
              {
                <span>"id"</span>: 1,
                <span>"fullname"</span>: "Олена",
                <span>"phone"</span>: "+380677299378",
                <span>"email"</span>: "111@example.com",
                <span>"category_id"</span>: 5,
                <span>"text"</span>: "Text 1",
                <span>"created_at"</span>: "2024-03-05T01:48:14.000000Z",
                <span>"updated_at"</span>: "2024-03-05T01:48:14.000000Z"
              },
              {
                <span>"id"</span>: 2,
                <span>"fullname"</span>: "Ярослав",
                <span>"phone"</span>: "+380661666755",
                <span>"email"</span>: "222@example.com",
                <span>"category_id"</span>: 7,
                <span>"text"</span>: "Text 2",
                <span>"created_at"</span>: "2024-03-05T01:48:48.000000Z",
                <span>"updated_at"</span>: "2024-03-05T01:48:48.000000Z"
              }
            ]
          </pre>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading8">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
          <p>GET <u>/api/callback</u></p>
        </button>
      </h2>
      <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <pre>
            [
              {
                <span>"id"</span>: 1,
                <span>"fullname"</span>: "Олена",
                <span>"phone"</span>: "+380661666755",
                <span>"created_at"</span>: "2024-03-07T02:07:11.000000Z",
                <span>"updated_at"</span>: "2024-03-07T02:07:11.000000Z"
              },
              {
                <span>"id"</span>: 2,
                <span>"fullname"</span>: "Ярослав",
                <span>"phone"</span>: "+380677299378",
                <span>"created_at"</span>: "2024-03-07T02:07:36.000000Z",
                <span>"updated_at"</span>: "2024-03-07T02:07:36.000000Z"
              }
            ]
          </pre>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading9">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
          <p>GET <u>/api/type_repair</u></p>
        </button>
      </h2>
      <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <pre>
            [
              {
                <span>"id"</span>: 1,
                <span>"type"</span>: "Заміна дисплея з сенсорним екраном",
                <span>"price"</span>: "З299",
                <span>"category_id"</span>: 1,
                <span>"created_at"</span>: "2024-03-07T11:51:54.000000Z",
                <span>"updated_at"</span>: "2024-03-07T11:51:54.000000Z"
              },
              {
                <span>"id"</span>: 2,
                <span>"type"</span>: "Заміна сенсорного скла",
                <span>"price"</span>: "1499",
                <span>"category_id"</span>: 1,
                <span>"created_at"</span>: "2024-03-07T11:52:46.000000Z",
                <span>"updated_at"</span>: "2024-03-07T11:52:46.000000Z"
              },
              {
                <span>"id"</span>: 3,
                <span>"type"</span>: "Заміна задньої панелі",
                <span>"price"</span>: "1099",
                <span>"category_id"</span>: 1,
                <span>"created_at"</span>: "2024-03-07T11:54:25.000000Z",
                <span>"updated_at"</span>: "2024-03-07T11:54:25.000000Z"
              },
              {
                <span>"id"</span>: 4,
                <span>"type"</span>: "Заміна акумулятора",
                <span>"price"</span>: "1049",
                <span>"category_id"</span>: 1,
                <span>"created_at"</span>: "2024-03-07T11:55:55.000000Z",
                <span>"updated_at"</span>: "2024-03-07T11:55:55.000000Z"
              }
            ]
          </pre>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>