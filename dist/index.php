<?php include 'includes/header.php' ?>

  <div class="site-container">
    <div id="app">
      <p>{{ message }}</p>
    </div>

    <div id="app-2">
      <span v-bind:title="message">
      Hover your mouse over me for a few seconds
      to see my dynamically bound title!
      </span>
    </div>

    <div id="app-3">
      <p v-if="seen">Now you see me</p>
    </div>

    <div id="app-4">
      <ol>
        <li v-for="todo in todos">
          {{ todo.text }}
        </li>
      </ol>
    </div>

    <div id="app-5">
      <p>{{ message }}</p>
      <button v-on:click="reverseMessage">Reverse Message</button>
    </div>


    <div id="app-7">
        <!--
          Now we provide each todo-item with the todo object
          it's representing, so that its content can be dynamic.
          We also need to provide each component with a "key",
          which will be explained later.
        -->
        <todo-item
          v-for="item in groceryList"
          v-bind:todo="item"
          v-bind:key="item.id">
        </todo-item>
        <todo-item
          v-for="item in groceryList"
          v-bind:todo="item"
          v-bind:key="item.id">
        </todo-item>
    </div>



  </div> <!-- end of container -->
<?php include 'includes/footer.php' ?>
