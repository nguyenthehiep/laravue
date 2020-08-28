<template>
    <div>
        <p v-if="errored">{{ error }}</p>
        <p v-if="loading">Loading...</p>

        <div v-else>
            <ul>
                <li v-for="todo in todos" :key="todo.id">{{ todo.title }}</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            loading: true,
            errored: false,
            error: null,
            todos: null
        };
    },
    created() {
        let vm = this;
        axios
            .get("https://jsonplaceholder.typicode.com/todos", {
                params: {
                    userId: "1"
                }
            })
            .then(response => {
                vm.todos = response.data;
            })
            .catch(err => {
                (vm.errored = true), (vm.error = err);
            })
            .finally(() => (vm.loading = false));
    }
};
</script>