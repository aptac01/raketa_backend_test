1) В глаза бросилось отсутствие комментариев вообще, они должны быть хотя бы на определениях эндпоинтов.
2) Нет документации.
3) Нет каких-нибудь тестов, без которых не проверить на мелкие баги. С полпинка проект не запустить, только в составе большого проекта.
4) Непонятно зачем нужны дополнительные поля в корзине (customer и paymentMethod в CartView) если они нигде не используются и в ТЗ их тоже нет.
5) Класс JsonResponse не заполнен, хотя во всех методах прописаны типы ответов, оно выпадет в ошибку.
6) В классе ProductsView метод toArray можно оптимизировать, если перенести преобразование в массив в класс ProductRepository метод getByCategory.
   Массив - довольно распространённый тип данных, можно и сделать для него метод в классе Product.
7) В ConnectorFacade нет логгирования ошибок коннекта к редису, а в ТЗ это отдельным пунктом есть.
8) Непонятно зачем класс Product сделан отдельно от остальных моделей данных, я бы перенёс его в Domain.
9) Не везде использован constructor property promotion, в ConnectiorFacade нет этого.
10) В CartManager не везде указаны типы значений (при указанном strict_types=1)