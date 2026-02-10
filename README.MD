# Secure PHP Web Application using AWS WAF (Priority Rules)

## Overview
This project demonstrates how to deploy and secure a PHP web application on AWS
using AWS WAF with priority-based rules in front of an Application Load Balancer.
The application runs on EC2 instances and uses a MySQL database.

## Architecture Flow
User → AWS WAF → Application Load Balancer (ALB) → EC2 (PHP + Apache) → MySQL  
AWS WAF logs are sent to CloudWatch Logs for monitoring and analysis.

## AWS Services Used
- Amazon VPC
- EC2 (Apache + PHP)
- Application Load Balancer (ALB)
- AWS WAF (IP Block, SQL Injection, CAPTCHA, Rule Priority)
- Amazon RDS (MySQL)
- Amazon CloudWatch Logs

## Security Features
- AWS WAF attached to ALB
- IP blocking rules
- SQL Injection protection (managed rules)
- CAPTCHA for suspicious requests
- Rule priority configuration
- Request logging using CloudWatch Logs

## Project Structure
