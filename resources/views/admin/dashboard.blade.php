@extends('layouts.app')

@section('title', 'Admin Dashboard - HelpfulSoftware')

@section('content')
<style>
    .admin-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    .admin-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid #eee;
    }
    .admin-title {
        color: #333;
        margin: 0;
    }
    .logout-btn {
        background: #e74c3c;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
    }
    .logout-btn:hover {
        background: #c0392b;
    }
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }
    .stat-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        text-align: center;
    }
    .stat-number {
        font-size: 2rem;
        font-weight: bold;
        color: #667eea;
        margin-bottom: 5px;
    }
    .stat-label {
        color: #666;
        font-size: 0.9rem;
    }
    .messages-section {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        overflow: hidden;
    }
    .messages-header {
        background: #f8f9fa;
        padding: 20px;
        border-bottom: 1px solid #eee;
    }
    .message-item {
        padding: 20px;
        border-bottom: 1px solid #eee;
        transition: background-color 0.2s;
    }
    .message-item:hover {
        background-color: #f8f9fa;
    }
    .message-item.unread {
        background-color: #e3f2fd;
        border-left: 4px solid #2196f3;
    }
    .message-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }
    .message-sender {
        font-weight: bold;
        color: #333;
    }
    .message-date {
        color: #666;
        font-size: 0.9rem;
    }
    .message-subject {
        font-weight: 500;
        color: #555;
        margin-bottom: 5px;
    }
    .message-content {
        color: #666;
        line-height: 1.5;
    }
    .message-actions {
        margin-top: 10px;
    }
    .btn {
        padding: 5px 15px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        text-decoration: none;
        font-size: 0.9rem;
        margin-right: 10px;
    }
    .btn-primary {
        background: #2196f3;
        color: white;
    }
    .btn-danger {
        background: #f44336;
        color: white;
    }
    .btn:hover {
        opacity: 0.8;
    }
    .success-message {
        background: #d4edda;
        color: #155724;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
</style>

<div class="admin-container">
    <div class="admin-header">
        <h1 class="admin-title">Admin Dashboard</h1>
        <a href="{{ route('admin.logout') }}" class="logout-btn">Logout</a>
    </div>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-number">{{ $messages->count() }}</div>
            <div class="stat-label">Total Messages</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">{{ $unreadCount }}</div>
            <div class="stat-label">Unread Messages</div>
        </div>
    </div>

    <div class="messages-section">
        <div class="messages-header">
            <h3>Contact Messages</h3>
        </div>
        
        @forelse($messages as $message)
            <div class="message-item {{ $message->read ? '' : 'unread' }}">
                <div class="message-header">
                    <div class="message-sender">{{ $message->name }} ({{ $message->email }})</div>
                    <div class="message-date">{{ $message->created_at->format('M d, Y H:i') }}</div>
                </div>
                <div class="message-subject">{{ $message->subject }}</div>
                <div class="message-content">{{ $message->message }}</div>
                <div class="message-actions">
                    @if(!$message->read)
                        <form method="POST" action="{{ route('admin.mark-read', $message->id) }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-primary">Mark as Read</button>
                        </form>
                    @endif
                    <form method="POST" action="{{ route('admin.delete-message', $message->id) }}" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this message?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="message-item">
                <div class="message-content">No messages yet.</div>
            </div>
        @endforelse
    </div>
</div>
@endsection
