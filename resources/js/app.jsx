import './bootstrap';
import '../css/app.css';
import React from 'react';
import { createRoot } from 'react-dom/client';

function App() {
    return (
        <div className="flex items-center justify-center h-screen bg-gray-900 text-white">
            <h1 className="text-4xl font-bold text-blue-500">
                Olá, PhiloWay!
            </h1>
        </div>
    );
}

const root = document.getElementById('app');
if (root) {
    createRoot(root).render(<App />);
}