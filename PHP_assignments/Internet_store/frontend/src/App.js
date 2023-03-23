import './App.css';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Header from './components/header/Header';
import Products from './pages/Products';
import AdminProducts from './pages/admin/Products';

function App() {
  return (
    <>
      <BrowserRouter>
        <Header />
        <Routes>
          <Route path="/" element={<Products />} />
          <Route path="/admin" element={<AdminProducts />} />
        </Routes>
      </BrowserRouter>
    </>
  );
}

export default App;
