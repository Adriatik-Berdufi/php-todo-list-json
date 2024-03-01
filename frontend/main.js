const {createApp} = Vue;
const app = createApp({
    data(){
        return{
            title: 'Todo List',
            todoList: [],
            newItem:{ value:'',done:false},
        };
    },
    methods: {
        fetchTaskList() {
            axios.get('../backend/api/getlist.php')
             
              .then((response) => this.todoList = response.data)
          },
        fetchsaveNewItem(){
            if(this.newItem.value.length == 0) return;

            axios.post('../backend/api/add-item.php',{value: this.newItem.value})
                .then((response) => {
                    this.todoList = response.data;
                    this.newItem.value = '';
                })
        }
    },
    mounted(){ 
        this.fetchTaskList();
    },
    
});
app.mount('#app');