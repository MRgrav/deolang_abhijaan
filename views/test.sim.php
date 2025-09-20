{{ _a = 12 }}
<div id="parent-div" class='m-5 p-5 bg-sky-20 rounded-lg shadow'>
    <p class="text-xl font-semibold" >{{ _a }}</p>
    <!-- <p>
        {{ isset_GET_hey }}
    </p> -->
    <p>
        {{ isset_POST_hey }}
    </p>
    <form id="checked-contacts"
      hx-post="/test"
      hx-swap="outerHTML settle:3s"
      hx-target="#parent-div">
        <input class='mt-4 px-2 py-1 rounded-md border-2' name="hey" type="text">
        <input type="submit" value="submit" class="px-3 py-1 rounded shadow bg-blue-700 text-white">
    </form>
    
</div>