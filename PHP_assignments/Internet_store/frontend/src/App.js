import { useEffect } from 'react';
import './App.css';

function App() {

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/')
      .then(resp => resp.json())
      .then(resp => {
        console.log(resp);
      })
  }, [])

  return (
    <div className="container py-3">
      <h1>New products</h1>
    </div>
  );
}

export default App;
