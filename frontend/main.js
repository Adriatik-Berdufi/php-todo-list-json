const {createApp} = Vue;
const app = createApp({
    data(){
        return{
            title: 'Todo List',
            todoList: [
              /*   {   value: "opsion1",
                    done: true,
                },
                {   value: "opsion2",
                    done: true,
                },
                {   value: "opsion3",
                    done: true,
                },
                {   value: "opsion4",
                    done: true,
                },
                {   value: "opsion5",
                    done: true,
                },
                {   value: "opsion6",
                    done: true,
                } */
            ],
        };
    },
    methods: {
        fetchTaskList() {
            axios.get('../backend/api/getlist.php')
             
              .then((response) => this.todoList = response.data)
          },
          
    },
    mounted(){ 
        this.fetchTaskList();
    },
    
});
app.mount('#app');