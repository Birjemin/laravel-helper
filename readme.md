## laravel小助手

依赖laravel

1. BusinessException
用于handler捕获所有的exception

2. Helper
用于定义一些公共的方法

3. Job
用于job

4. Repository
用于repository

5. Transformer
用于格式化数据

6. Validator
用于验证数据(以后不用写下面的东东啦)
```
if(...) {
    throw new Exception('条件不合法');
}
if (!$user = User::find(1)) {
    throw new Exception('用户不存在')
}
```