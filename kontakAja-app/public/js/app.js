const leftSide = document.querySelector("#leftSide .list");
const rightSide = document.querySelector("#rightSide .list");
const alertDomLeft = document.querySelector(".alert-left .alert");
const alertDomRight = document.querySelector(".alert-right .alert");
const leftTotalTodos = document.querySelector("#leftSide .total");
const rightTotalTodos = document.querySelector("#rightSide .total");

const alert = (status, type, msg) => {
    if (status) {
        alertDomRight.style.left = "0";
        alertDomRight.style.backgroundColor = `var(--${type})`;
        alertDomRight.innerText = msg;
        setTimeout(() => {
            alertDomRight.style.left = "-110%";
        }, 2000);
    } else {
        alertDomLeft.style.right = "0";
        alertDomLeft.style.backgroundColor = `var(--${type})`;
        alertDomLeft.innerText = msg;
        setTimeout(() => {
            alertDomLeft.style.right = "-110%";
        }, 2000);
    }
};

const createListElement = (newTodo) => {
    const {
        id,
        completed,
        text,
        priority
    } = newTodo;

    const todoList = document.createElement("div");
    todoList.className = "todo-list";
    completed ? rightSide.prepend(todoList) : leftSide.prepend(todoList);

    const getDate = new Date().toLocaleDateString();
    const date = document.createElement("div");
    date.className = "date";
    date.innerText = getDate;
    todoList.appendChild(date);

    const row = document.createElement("div");
    row.className = "row";
    todoList.appendChild(row);

    const todos = document.createElement("div");
    todos.className = "todos";
    row.appendChild(todos);

    const checkbox = document.createElement("input");
    checkbox.setAttribute("type", "checkbox");
    completed && checkbox.setAttribute("checked", "checked");
    checkbox.setAttribute("value", text);
    checkbox.className = "todoItem";
    checkbox.id = id;
    todos.appendChild(checkbox);

    const todoLabel = document.createElement("label");
    todoLabel.setAttribute("for", id);
    todoLabel.innerText = text;
    todos.appendChild(todoLabel);

    const faPen = document.createElement("i");
    faPen.className = "fa-regular fa-pen-to-square";
    todos.appendChild(faPen);

    const faXmark = document.createElement("i");
    faXmark.className = "fa-solid fa-xmark deleteItem";
    todos.appendChild(faXmark);

    const circle = document.createElement("div");
    circle.className = `circle ${priority}`;
    row.appendChild(circle);
};

const todoCountFunc = (todoArray) => {
    let totalTodosFalse = todoArray.filter((todo) => todo.completed === false);
    let totalTodosTrue = todoArray.filter((todo) => todo.completed === true);

    leftTotalTodos.innerText = `Tugas Tersisa: ${totalTodosFalse.length}`;
    rightTotalTodos.innerText = `Tugas Selesai: ${totalTodosTrue.length}`;
};

const inputContainer = document.querySelector(".input-container");
const todoInput = document.querySelector(".todo-input");
const prioritySelectBox = document.querySelector(".priority");
const box = document.querySelector(".box");
const editItem = document.querySelector(".editItem");
const closeBox = document.querySelector(".box .fa-xmark");
const delFilter = document.querySelector(".filter");

let todoArray = JSON.parse(localStorage.getItem("TODOS")) || [];

let filtered;

const renderSavedTodos = () => {
    todoArray.forEach((todo) => {
        createListElement(todo);
    });
    todoCountFunc(todoArray);
};

renderSavedTodos();

closeBox.addEventListener("click", () => {
    box.classList.remove("active");
    delFilter.classList.remove("active");
});

inputContainer.addEventListener("submit", (e) => {
    e.preventDefault();

    if (!todoInput.value) {
        return;
    } else if (!todoInput.value || prioritySelectBox.value == "Priority") {
        return;
    }
    if (todoInput.value.trim() === "") { } else {
        const newTodo = {
            id: new Date().getTime(),
            completed: false,
            text: todoInput.value,
            priority: prioritySelectBox.value,
        };

        createListElement(newTodo);
        todoArray.push(newTodo);
        localStorage.setItem("TODOS", JSON.stringify(todoArray));
        todoInput.value = "";
        todoCountFunc(todoArray);
    }
});

const clearFunc = (arrayList) => {
    localStorage.setItem("TODOS", JSON.stringify(arrayList));
    const todoList = document.querySelectorAll(".todo-list");
    todoList.forEach((element) => {
        element.remove();
    });
    renderSavedTodos();
};

window.addEventListener("click", (e) => {
    let id = e.target.getAttribute("id");

    //! Check Item
    if (e.target.className === "todoItem") {
        todoArray.map((todo, i) => {
            if (todo.id == id) {
                todoArray[i].completed = !todoArray[i].completed;
                todoArray[i].completed
            }
        });
        clearFunc(todoArray);
    }
    //! Delet Item
    else if (e.target.className === "fa-solid fa-xmark deleteItem") {
        id = e.target.previousSibling.previousSibling.getAttribute("for");

        let todoCheck = todoArray.filter((todo) => todo.id === Number(id));
        todoArray = todoArray.filter((todo) => todo.id !== Number(id));
        clearFunc(todoArray);
    }

    //! Edit Item
    else if (e.target.className === "fa-regular fa-pen-to-square") {
        id = e.target.previousSibling.getAttribute("for");

        function* filter(array, condition, maxSize) {
            if (!maxSize || maxSize > array.length) {
                maxSize = array.length;
            }
            let count = 0;
            let i = 0;
            while (count < maxSize && i < array.length) {
                if (condition(array[i])) {
                    yield array[i];
                    count++;
                }
                i++;
            }
        }
        filtered = Array.from(
            filter(todoArray, (todo) => todo.id === Number(id), 1)
        );

        box.classList.add("active");
        delFilter.classList.add("active");
        editItem.value = filtered[0].text;
    } else if (e.target.className === "editSubmit") {
        filtered[0].text = editItem.value;
        todoArray = todoArray.filter((todo) => todo);
        box.classList.remove("active");
        delFilter.classList.remove("active");
        clearFunc(todoArray);
    }
});

window.onload = function () {
    todoInput.focus();
};
