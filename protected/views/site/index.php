<div ng-app="" ng-init="quantity=1;cost=5000;person={firstName:'John',lastName:'Doe'};points=[1,15,19,2,40]">
  <p>Name: <input type="text" ng-model="name"></p>
  <p ng-bind="name"></p>

  <p>My first expression: {{ 5 + 5 }}</p>

  <p>Total in dollar: <span ng-bind="quantity * cost"></span></p>

  <p>The name is {{ person.firstName+ " " +person.lastName }}</p>

  <p>The third result is {{ points[2] }}</p>
</div>
