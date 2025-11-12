<template>
  <div class="container">
    <h1>Мои задачи</h1>

    <!-- Форма добавления -->
    <form @submit.prevent="addTodo" class="add-form">
      <input
        v-model="newTitle"
        type="text"
        placeholder="Новая задача..."
        required
        class="input"
      />
      <button type="submit" class="btn-add">Добавить</button>
    </form>

    <!-- Фильтры -->
    <div class="filters">
      <button
        @click="filter = 'all'"
        :class="{ active: filter === 'all' }"
        class="filter-btn"
      >
        Все
      </button>
      <button
        @click="filter = 'completed'"
        :class="{ active: filter === 'completed' }"
        class="filter-btn"
      >
        Выполненные
      </button>
      <button
        @click="filter = 'active'"
        :class="{ active: filter === 'active' }"
        class="filter-btn"
      >
        Невыполненные
      </button>
    </div>

    <!-- Список задач -->
    <TodoList
      :todos="filteredTodos"
      @toggle="toggleComplete"
      @delete="deleteTodo"
    />

    <p v-if="filteredTodos.length === 0" class="empty">
      {{ filter === 'all' ? 'Нет задач' : 'Нет задач по фильтру' }}
    </p>
  </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue'
import TodoList from './components/TodoList.vue'

const todos = ref([])
const newTitle = ref('')
const filter = ref('all')

const API_URL = 'https://jsonplaceholder.typicode.com/todos'

onMounted(async () => 
{
  const saved = localStorage.getItem('todos')
  if (saved) 
  {
    todos.value = JSON.parse(saved)
    return
  }

  try 
  {
    const res = await fetch(`${API_URL}?_limit=10`)
    const data = await res.json()
    todos.value = data.map(todo => (
      {
      ...todo,
      id: todo.id,
      title: todo.title,
      completed: todo.completed
      }))
    saveToLocalStorage()
  } catch (err) 
    {
      console.error('Ошибка загрузки:', err)
    }
})

const saveToLocalStorage = () => 
{
  localStorage.setItem('todos', JSON.stringify(todos.value))
}

const filteredTodos = computed(() => 
{
  if (filter.value === 'completed') 
  {
    return todos.value.filter(t => t.completed)
  }
  if (filter.value === 'active') 
  {
    return todos.value.filter(t => !t.completed)
  }
  return todos.value
})

const addTodo = async () => 
{
  const title = newTitle.value.trim()
  if (!title) return

  const newTodo = 
  {
    id: Date.now(),
    title,
    completed: false,
    userId: 1
  }

  todos.value.unshift(newTodo)
  newTitle.value = ''
  saveToLocalStorage()

  try 
  {
    const res = await fetch(API_URL, 
    {
      method: 'POST',
      body: JSON.stringify(newTodo),
      headers: { 'Content-Type': 'application/json' }
    })
    const created = await res.json()

    const index = todos.value.findIndex(t => t.id === newTodo.id)
    if (index !== -1) 
    {
      todos.value[index] = { ...created, completed: false }
      saveToLocalStorage()
    }
  } catch (err) 
    {
      console.error('Ошибка добавления:', err)
    }
}

const toggleComplete = async (id) => 
{
  const todo = todos.value.find(t => t.id === id)
  if (!todo) return

  const oldCompleted = todo.completed
  todo.completed = !oldCompleted
  saveToLocalStorage()

  try 
  {
    await fetch(`${API_URL}/${id}`, 
    {
      method: 'PATCH',
      body: JSON.stringify({ completed: todo.completed }),
      headers: { 'Content-Type': 'application/json' }
    })
  } catch (err) 
    {
      console.error('Ошибка обновления:', err)
      todo.completed = oldCompleted // откат
      saveToLocalStorage()
    }
}

const deleteTodo = async (id) => 
{
  const index = todos.value.findIndex(t => t.id === id)
  if (index === -1) return

  todos.value.splice(index, 1)
  saveToLocalStorage()

  try 
  {
    await fetch(`${API_URL}/${id}`, { method: 'DELETE' })
  } catch (err) 
  {
    console.error('Ошибка удаления:', err)
  }
}
</script>

<style scoped>
.container 
{
  max-width: 600px;
  margin: 2rem auto;
  padding: 0 1rem;
  font-family: 'Inter', sans-serif;
}

h1 
{
  text-align: center;
  margin-bottom: 1.5rem;
  color: #333;
}

.add-form 
{
  display: flex;
  gap: 0.5rem;
  margin-bottom: 1.5rem;
}

.input 
{
  flex: 1;
  padding: 0.75rem;
  border: 1px solid #ddd;
  border-radius: 8px;
  font-size: 1rem;
}

.btn-add 
{
  padding: 0.75rem 1rem;
  background: #2563eb;
  color: white;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 500;
}

.btn-add:hover 
{
  background: #1d4ed8;
}

.filters 
{
  display: flex;
  gap: 0.5rem;
  margin-bottom: 1.5rem;
  flex-wrap: wrap;
}

.filter-btn 
{
  padding: 0.5rem 1rem;
  border: 1px solid #ddd;
  background: white;
  border-radius: 6px;
  cursor: pointer;
  font-size: 0.9rem;
}

.filter-btn.active 
{
  background: #2563eb;
  color: white;
  border-color: #2563eb;
}

.empty 
{
  text-align: center;
  color: #888;
  font-style: italic;
  margin-top: 2rem;
}

/* Адаптивность */
@media (max-width: 480px) 
{
  .add-form 
  {
    flex-direction: column;
  }
  .btn-add 
  {
    width: 100%;
  }
  .filters 
  {
    justify-content: center;
  }
}
</style>