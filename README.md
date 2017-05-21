# first-task
使用自定的MVC框架搭建的bootstrap后台

### MVC大致架构

- "noahbuscher/macaw" 实现路由控制
- "illuminate/database" 实现模型控制
- "xiaoler/blade" 实现视图模板引擎
- 控制器，模型，视图均放在同一个命名空间下

### 尚未完善

- datepicker调用失败，还未解决
- rules规则过滤（包括时间为00，用00代替重合的24）
- flash提示信息
- 细节处
- remark细节控制
- 直接使用Location跳转，没有封装成redirect
- 订单与每小时订单需求量优化，应该把每小时订单需求量作为子树放在原始订单下，增加UX

### 思考不清楚的地方
- 三目运算符用不了
- 每小时的逻辑感觉很奇怪，而且实现的方法肯定是不对的，不高效的
