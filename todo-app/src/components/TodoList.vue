<template>
  <ul class="todo-list">
    <li v-for="todo in todos" :key="todo.id" class="todo-item">
      <label class="checkbox-label">
        <input
          type="checkbox"
          :checked="todo.completed"
          @change="$emit('toggle', todo.id)"
          class="checkbox"
        />
        <span :class="{ completed: todo.completed }">
          {{ todo.title }}
        </span>
      </label>
      <button @click="$emit('delete', todo.id)" class="btn-delete">
        ✕
      </button>
    </li>
  </ul>
</template>

<script setup>
defineProps({
  todos: 
  {
    type: Array,
    required: true
  }
})

defineEmits(['toggle', 'delete'])
</script>

<style scoped>
.todo-list 
{
  list-style: none;
  padding: 0;
  margin: 0;
}

.todo-item 
{
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0.75rem 0;
  border-bottom: 1px solid #eee;
}

.todo-item:last-child 
{
  border-bottom: none;
}

.checkbox-label 
{
  display: flex;
  align-items: center;
  gap: 0.75rem;
  flex: 1;
  cursor: pointer;
}

.checkbox 
{
  width: 1.2rem;
  height: 1.2rem;
  cursor: pointer;
}

.completed 
{
  text-decoration: line-through;
  color: #888;
}

.btn-delete 
{
  background: #ef4444;
  color: white;
  border: none;
  width: 28px;
  height: 28px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 1rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

.btn-delete:hover 
{
  background: #dc2626;
}

/* Адаптивность */
@media (max-width: 480px) 
{
  .todo-item 
  {
    flex-direction: column;
    align-items: flex-start;
    gap: 0.5rem;
  }
  .btn-delete 
  {
    align-self: flex-end;
  }
}
</style>